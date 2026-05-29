<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmissionDocument extends Model
{
    protected $fillable = [
        'title',
        'description',
        'file',
        'sort_order',
    ];
}
