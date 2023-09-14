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
}