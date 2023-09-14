<?php

namespace App\Repositories\Sales;

use App\Helpers\CalculateDistances;
use App\Models\Branch;
use App\Models\Sale;
use App\Models\Seller;

class SalesRepository 
{

    protected $entity;

    public function __construct(Sale $sale)
    {
        $this->entity = $sale;      
    }

    public function index($request)
    {  
        try {
            $user_id = auth()->user()->id;

            //Buscar vendas apenas do vendedor logado, ou da unidade caso for gerente, ou das unidades do diertoria caso for diretor
            $query = $this->entity->with(['seller'])
                ->where(function ($query) use ($user_id) {
                    $query->whereHas('seller', function ($sellerQuery) use ($user_id) {
                            $sellerQuery->where('seller_id', $user_id);
                        })
                        ->orWhereHas('seller.branch', function ($branchQuery) use ($user_id) {
                            $branchQuery->where('manager_id', $user_id);
                        })
                        ->orWhereHas('seller.branch.directorate.heads', function ($headQuery) use ($user_id) {
                            $headQuery->where('head_id', $user_id);
                        });
                });

            //filtros
            if(isset($request['start'])){
                $query->where('data_hora', '>=', $request['start']);
            }

            if(isset($request['end'])){
                $query->where('data_hora', '<=', $request['end']);
            }

            if(isset($request['directorate_id'])){
                $query->whereHas('seller.branch.directorate', function ($directorateQuery) use ($request) {
                    $directorateQuery->where('id', $request['directorate_id']);
                });
            }

            if(isset($request['branch_id'])){
                $query->whereHas('seller.branch', function ($branchQuery) use ($request) {
                    $branchQuery->where('id', $request['branch_id']);
                });
            }

            if(isset($request['seller_id'])){
                $query->whereHas('seller', function ($sellerQuery) use ($request) {
                    $sellerQuery->where('id', $request['seller_id']);
                });
            }

            return $query->get();
        } catch (\Throwable $th) {
            
            return response()->json([
                'message' => $th->getMessage()
            ], 404);
        }
    }

    public function store($data)
    {
        try {

            $data['seller_id'] = $this->getSeller(auth()->user()->id);

            if(!isset($data['data_hora'])){
                $data['data_hora'] = now();
            }

            $roaming = $this->calcRoaming($data['latitude'], $data['longitude'], $data['seller_id']);

            if($roaming != 0){
                $data['roaming'] = true;
                $data['branch_roaming_id'] = $roaming;
            }
                
            return $this->entity->create($data);

        } catch (\Throwable $th) {

            return response()->json([
                'message' => $th->getMessage()
            ], 404);

        }
    }

    public function show($id)
    {

        $user_id = auth()->user()->id;

        //Buscar vendas apenas do vendedor logado, ou da unidade caso for gerente, ou das unidades do diertoria caso for diretor
        $query = $this->entity->with(['seller'])
            ->where(function ($query) use ($user_id) {
                $query->whereHas('seller', function ($sellerQuery) use ($user_id) {
                        $sellerQuery->where('seller_id', $user_id);
                    })
                    ->orWhereHas('seller.branch', function ($branchQuery) use ($user_id) {
                        $branchQuery->where('manager_id', $user_id);
                    })
                    ->orWhereHas('seller.branch.directorate.heads', function ($headQuery) use ($user_id) {
                        $headQuery->where('head_id', $user_id);
                    });
            });

        return $query->find($id);
    }

    protected function calcRoaming(float $latitude, float $longitude, int $seller_id)
    {
        $seller = Seller::find($seller_id);

        //Depois de descobrir essa função do mysql, ficou fácil xD
        $nearestBranch = Branch::selectRaw('id, ST_DISTANCE_SPHERE(POINT(longitude, latitude), POINT(?, ?)) AS distancia', [
            $longitude, $latitude,
        ])
        ->orderBy('distancia', 'ASC')
        ->limit(1)
        ->get();

        $roaming = 0;

        if($seller->branch_id != $nearestBranch[0]->id){
            $roaming = $nearestBranch[0]->id;
        };

        return $roaming;
    }

    protected function getSeller(int $user_id)
    {
        $seller = Seller::where('seller_id', $user_id)->first();

        if($seller){
            return $seller->id;
        } else {
            throw new \Exception("This user is not a Seller");
        }
    }
}