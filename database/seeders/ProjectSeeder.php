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
        DB::table('projects')->upsert([
            [
                'title' => 'Модернизация производственного комплекса',
                'slug' => Str::slug('Модернизация производственного комплекса'),
                'img' => '/storage/projects/project-1.jpg',
                'description' => 'Обновление ключевых производственных линий и инфраструктуры.',
                'gallery' => json_encode([
                    '/storage/projects/project-1-1.jpg',
                    '/storage/projects/project-1-2.jpg',
                ]),
            ],
            [
                'title' => 'Развитие логистической сети',
                'slug' => Str::slug('Развитие логистической сети'),
                'img' => '/storage/projects/project-2.jpg',
                'description' => 'Увеличение скорости доставки и оптимизация маршрутов.',
                'gallery' => json_encode([
                    '/storage/projects/project-2-1.jpg',
                    '/storage/projects/project-2-2.jpg',
                ]),
            ],
        ], ['slug'], ['title', 'img', 'description', 'gallery']);
    }
}
