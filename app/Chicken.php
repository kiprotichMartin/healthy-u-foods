<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chicken extends Model
{
    protected $casts = [
        'kuku' => 'array',
    ];
}
