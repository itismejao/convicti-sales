<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SellersResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nome' => $this->user->name,
            'email' => $this->user->email,
            'branch' => $this->branch(),
            'sales' => $this->sales->count(),
            'roaming_sales' => $this->sales->where('roaming', true)->count(),
        ];
    }

    public function roaming(){
        if($this->roaming){
            return [
                'name' => $this->branchRoaming->name,
            ];
        }
        return false;
    }

    public function branch(){
        return [
           'name' => $this->branch->name,
           'directorate' => $this->branch->directorate->name,
        ];
    }
}