<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Directorate extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function branches(){
        return $this->hasMany(Branch::class, 'directorate_id');
    }

    public function heads(){
        return $this->hasMany(Head::class, 'directorate_id');
    }
}
