<?php

namespace App\Repositories\Sellers;

use App\Helpers\CalculateDistances;
use App\Models\Branch;
use App\Models\Seller;

class SellersRepository 
{

    protected $entity;

    public function __construct(Seller $seller)
    {
        $this->entity = $seller;      
    }

    public function index()
    {  
        try {
            $user_id = auth()->user()->id;

            //Buscar vendas apenas do vendedor logado, ou da unidade caso for gerente, ou das unidades do diertoria caso for diretor
            $query = $this->entity->with(['user','sales'])
                ->where('seller_id', $user_id)
                ->orWhereHas('branch', function ($branchQuery) use ($user_id) {
                    $branchQuery->where('manager_id', $user_id);
                })
                ->orWhereHas('branch.directorate.heads', function ($headQuery) use ($user_id) {
                    $headQuery->where('head_id', $user_id);
                });

            return $query->get();
        } catch (\Throwable $th) {
            
            return response()->json([
                'message' => $th->getMessage()
            ], 404);
        }
    }

    protected function calcRoaming(float $latitude, float $longitude, int $seller_id)
    {
        $seller = Seller::find($seller_id);

        $branchs = Branch::all();

        $roaming = 0;

        //Maior distancia entre duas coordenadas
        $MinDistance = 40.000;

        foreach ($branchs as $branch) {

            $distance = CalculateDistances::byCoordinates($latitude, $longitude, $branch->latitude, $branch->longitude);

            if($distance < $MinDistance){
                $MinDistance = $distance;
                $roaming = $branch->id;
            }
        }

        if($roaming == $seller->branch_id){
            $roaming = 0;
        }

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