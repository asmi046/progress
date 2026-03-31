<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class SeoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'url' => '/',
                'seo_title' => 'Агропромышленная компания Прогресс - современные сельскохозяйственные технологии',
                'seo_description' => 'Агропромышленная компания Прогресс предлагает современные решения для сельского хозяйства.',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
            [
                'url' => 'contacts',
                'seo_title' => 'Контакты',
                'seo_description' => 'Свяжитесь с нами для получения дополнительной информации.',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
            [
                'url' => 'for-investors',
                'seo_title' => 'Для инвесторов',
                'seo_description' => 'Информация для инвесторов о компании Прогресс.',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
        ];

        DB::table('seo_data')->insert($data);
    }
}
