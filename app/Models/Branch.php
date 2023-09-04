<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    protected $table = 'branchs';

    protected $fillable = [
        'name',
        'latitude',
        'longitude',
        'manager_id',
        'directorate_id',
    ];

    public function manager(){
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function directorate(){
        return $this->belongsTo(Directorate::class, 'directorate_id');
    }

    public function sellers(){
        return $this->hasMany(Seller::class, 'branch_id');
    }

}
