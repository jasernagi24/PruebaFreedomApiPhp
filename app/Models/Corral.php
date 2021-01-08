<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corral extends Model
{
    protected $table = 'corrales';

    protected $fillable = [
        'name',
        'capacity'
    ];

    protected $hidden =[
        'created_at',
        'updated_at'
    ];
}
