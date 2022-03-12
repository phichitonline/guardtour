<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetour extends Model
{
    use HasFactory;

    protected $fillable = [
        'guard_id',
        'point_qrcode',
        'gps_stamp',
        'tour_date_stamp',
        'tour_time_stamp',
    ];

}
