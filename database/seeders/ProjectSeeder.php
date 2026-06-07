<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title' => 'Модернизация производственного комплекса',
                'slug' => Str::slug('Модернизация производственного комплекса'),
                'description' => 'Обновление ключевых производственных линий и инфраструктуры.',
                'gallery' => json_encode([
                    '/storage/projects/project-1-1.jpg',
                    '/storage/projects/project-1-2.jpg',
                ]),
                'seo_title' => 'Модернизация производственного комплекса - проект компании Прогресс',
                'seo_description' => 'Проект модернизации производственного комплекса: обновление линий, рост эффективности и технологическое развитие.',
            ],
        ];

        $itemsForUpsert = array_map(function (array $item): array {
            unset($item['seo_title'], $item['seo_description']);

            return $item;
        }, $items);

        DB::table('projects')->upsert($itemsForUpsert, ['slug'], ['title', 'description', 'gallery']);

        foreach ($items as $item) {
            DB::table('seo_data')->updateOrInsert(
                ['url' => 'projects/'.$item['slug']],
                [
                    'url' => 'projects/'.$item['slug'],
                    'seo_title' => $item['seo_title'] ?? $item['title'],
                    'seo_description' => $item['seo_description'] ?? $item['title'],
                ]
            );
        }
    }
}
