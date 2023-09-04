<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SalesResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'value' => $this->value,
            'data_hora' => $this->data_hora,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'seller' => $this->seller(),
            'branch' => $this->branch(),
            'roaming' => $this->roaming(),
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

    public function seller(){
        return [
           'name' => $this->seller->user->name,
        ];
    }

    public function branch(){
        return [
           'name' => $this->seller->branch->name,
           'directorate' => $this->seller->branch->directorate->name,
        ];
    }
}