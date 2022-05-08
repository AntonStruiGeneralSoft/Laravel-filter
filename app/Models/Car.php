<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Filterable;

class Car extends Model
{
    use HasFactory, SoftDeletes, Filterable;

    protected $table = 'cars'; 

    protected $fillable = [ 
        'make',
        'model',
        'year',
        'color'
    ];
}
