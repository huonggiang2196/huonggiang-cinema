<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Relations\PostRelation;

class Post extends Model
{
    use PostRelation;
    
    protected $fillable = [
        'title',
        'description',
        'content',
        'status',
        'media_id',
    ];

}
