<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Relations\PromotionRelation;

class Promotion extends Model
{
    use PromotionRelation;
    
    protected $fillable = [
        'title',
        'description',
        'content',
        'start',
        'end',
        'sale',
        'status',
    ];

}