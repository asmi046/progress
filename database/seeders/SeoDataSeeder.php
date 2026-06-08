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
                'seo_title' => 'Агропромышленная компания ЗАО «ПРОГРЕСС» - современные сельскохозяйственные технологии',
                'seo_description' => 'Агропромышленная компания ЗАО «ПРОГРЕСС» предлагает современные решения для сельского хозяйства.',
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
                'seo_description' => 'Информация для инвесторов о компании ЗАО «ПРОГРЕСС».',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
            [
                'url' => 'emission-documents',
                'seo_title' => 'Эмиссионные документы',
                'seo_description' => 'Эмиссионные документы компании ЗАО «ПРОГРЕСС».',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
            [
                'url' => 'projects',
                'seo_title' => 'Наши проекты',
                'seo_description' => 'Информация о наших проектах.',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
            [
                'url' => 'news-events',
                'seo_title' => 'Новости и события',
                'seo_description' => 'Информация о наших новостях и событиях.',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
            [
                'url' => 'product-services',
                'seo_title' => 'Товары и услуги',
                'seo_description' => 'Информация о наших товарах и услугах.',
                'page_title' => '',
                // 'seoable_id' => 1,
                // 'seoable_type' => "App\Models\Page"
            ],
        ];

        DB::table('seo_data')->insert($data);
    }
}
