<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fuction extends Model
{
    protected $fillable = [
        'start',
        'end',
        'aviable',
        'type'
    ];
}
