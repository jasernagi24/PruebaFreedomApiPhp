<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animales';

    protected $fillable = [
        'name',
        'corral_id',
        'age',
        'quantity',
        'classification'
    ];

    protected $hidden =[
        'created_at',
        'updated_at'
    ];
}
