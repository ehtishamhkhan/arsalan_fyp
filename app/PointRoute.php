<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PointRoute extends Model
{
    protected $fillable = [
        'alias', 'url',
    ];
}
