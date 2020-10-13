<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'chairs',
        'location',
        'capacity'
    ];
}
