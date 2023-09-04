<?php

namespace App\Repositories\Branchs;

use App\Models\Branch;
use App\Models\Sale;
use App\Models\Seller;

class BranchsRepository 
{

    protected $entity;

    public function __construct(Branch $branch)
    {
        $this->entity = $branch;      
    }

    public function map(){
        try {
            $user_id = auth()->user()->id;

            //Buscar unidades que for gerente, ou das unidades da diretoria caso for diretor
            $query = $this->entity->where(function ($query) use ($user_id) {
                $query->where('manager_id', $user_id)
                ->orWhereHas('directorate.heads', function ($headQuery) use ($user_id) {
                    $headQuery->where('head_id', $user_id);
                });
            });

            $branchs = $query->get();

            $branchs->each(function ($branch) {
                $branch->sold = $this->sold($branch->id);
            });

            return $branchs;
            
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 404);
        }
    }

    protected function sold(int $branch_id){
        $sold = Sale::whereHas('seller', function ($sellerQuery) use ($branch_id) {
            $sellerQuery->where('branch_id', $branch_id);
        })->sum('value');
        return $sold; 
    }
}