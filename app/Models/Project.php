<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'img',
        'description',
        'gallery',
    ];

    protected $casts = [
        'gallery' => 'array',
    ];
}
