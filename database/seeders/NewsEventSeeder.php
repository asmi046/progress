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

        $items = [
            [
                'title' => 'Мы запустили новый сайт!',
                'slug' => Str::slug('Мы запустили новый сайт!'),
                'img' => 'news/news-1.jpg',
                'description' => file_get_contents(public_path('seeder_data/news/site.html')),
                'seo_title' => 'Мы запустили новый сайт - новости ЗАО Прогресс',
                'seo_description' => 'Новости компании Прогресс: запуск нового корпоративного сайта с обновленной структурой и улучшенной навигацией.',
            ],
        ];

        $itemsForUpsert = array_map(function (array $item): array {
            unset($item['seo_title'], $item['seo_description']);

            return $item;
        }, $items);

        DB::table('news_events')->upsert($itemsForUpsert, ['slug'], ['title', 'img', 'description']);

        foreach ($items as $item) {
            DB::table('seo_data')->updateOrInsert(
                ['url' => 'news-events/'.$item['slug']],
                [
                    'url' => 'news-events/'.$item['slug'],
                    'seo_title' => $item['seo_title'] ?? $item['title'],
                    'seo_description' => $item['seo_description'] ?? $item['title'],
                ]
            );
        }
    }
}
