<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'data_hora',
        'latitude',
        'longitude',
        'roaming',
        'branch_roaming_id',
        'seller_id',
    ];

    public function seller(){
        return $this->belongsTo(Seller::class, 'seller_id');
    }

    public function branchRoaming(){
        return $this->belongsTo(Branch::class, 'branch_roaming_id');
    }
}
