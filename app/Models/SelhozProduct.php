<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelhozProduct extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'img',
        'description',
        'galery',
        'sertificates',
    ];

    protected $casts = [
        'galery' => 'array',
        'sertificates' => 'array',
    ];
}
