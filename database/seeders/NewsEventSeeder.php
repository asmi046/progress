<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put('news/news-1.jpg', file_get_contents(public_path('seeder_data/news/progress_screen.webp')), 'public');

        DB::table('news_events')->upsert([
            [
                'title' => 'Мы запустили новый сайт!',
                'slug' => Str::slug('Мы запустили новый сайт!'),
                'img' => 'news/news-1.jpg',
                'description' => file_get_contents(public_path('seeder_data/news/site.html')),
            ],
        ], ['slug'], ['title', 'img', 'description']);
    }
}
