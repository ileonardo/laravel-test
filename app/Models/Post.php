<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = [
        'id', 'user_id',
        'title', 'content',
        'published', 'published_at',
    ];
}
