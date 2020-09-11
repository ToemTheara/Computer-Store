<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $primaryKey = 'computer_id';
    protected $fillable = [
        'image',
        'name',
        'type',
        'price',
        'cpu',
        'ram',
        'storage',
        'detail',
        'year',
        'model'

    ];


}
