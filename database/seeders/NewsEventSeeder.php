<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NewsEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news_events')->upsert([
            [
                'title' => 'Запуск новой линии переработки',
                'slug' => Str::slug('Запуск новой линии переработки'),
                'img' => '/storage/news/news-1.jpg',
                'description' => 'Компания запустила новую технологичную производственную линию.',
            ],
            [
                'title' => 'Участие в отраслевой выставке',
                'slug' => Str::slug('Участие в отраслевой выставке'),
                'img' => '/storage/news/news-2.jpg',
                'description' => 'Представили ключевые решения и новые направления развития.',
            ],
        ], ['slug'], ['title', 'img', 'description']);
    }
}
