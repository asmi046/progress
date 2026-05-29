<?php

namespace App\Http\Controllers;

use App\Models\NewsEvent;

class NewsEventController extends Controller
{
    public function index()
    {
        $newsEvents = NewsEvent::query()->orderBy('id', 'desc')->get();

        return view('news-events.index', ['newsEvents' => $newsEvents]);
    }

    public function show(string $slug)
    {
        $newsEvent = NewsEvent::query()->where('slug', $slug)->firstOrFail();

        return view('news-events.show', ['newsEvent' => $newsEvent]);
    }
}
