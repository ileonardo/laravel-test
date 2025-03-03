<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = [
        'id', 'price', 'name',
        'active', 'active_at', 'sort',
    ];

    protected $casts = [
        'active' => 'boolean',
        'sort' => 'integer',
        'price' => 'float',
    ];

    protected $dates = [
        'active_at',
    ];
}
