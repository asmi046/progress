<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Contact extends Model
{
    public $fillable = [
        'name',
        'title',
        'value',
    ];

    public static function allFromCacheName(): Collection
    {
        return Cache::rememberForever('all_contacts_name', function () {
            return self::query()->get()->keyBy('name');
        });
    }

    public static function allFromCacheTitle(): Collection
    {
        return Cache::rememberForever('all_contacts_title', function () {
            return self::query()->get()->keyBy('title');
        });
    }
}
