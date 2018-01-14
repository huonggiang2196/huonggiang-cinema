<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Relations\CinemaSchduleRelation;

class CinemaSchedule extends Model
{
    use CinemaSchduleRelation;
    
    protected $fillable = [
        'cinema_id',
        'movie_id',
        'day_id',
        'price',
    ];

}