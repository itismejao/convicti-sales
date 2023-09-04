<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'seller_id'
    ];

    public function branch(){
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function sales(){
        return $this->hasMany(Sale::class, 'seller_id','seller_id');
    }
}
