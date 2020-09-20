<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $fillable = [
        'make',
        'model_name',
        'model_year',
        'mileage',
        'availability',
        'category_id'
    ];
}
