<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juice extends Model
{
    protected $casts = [
        'fruits' => 'array',
        'vegetables' => 'array'
    ];
}
