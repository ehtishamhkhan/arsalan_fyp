<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = [
        'driver_id',
        'vehicle_reg_no',
        'live_lat',
        'live_lng',
        'route_id',
    ];
}
