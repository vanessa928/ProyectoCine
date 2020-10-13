<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    protected $fillable=[
        'name',
        'synopsis',
        'category',
        'director',
        'duracion',
        'actors',
        'genre'
    ];
}
