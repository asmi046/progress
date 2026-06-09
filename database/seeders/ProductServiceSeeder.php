<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put('services/arenda_1.webp', file_get_contents(public_path('seeder_data/services/arenda/arenda_1.webp')), 'public');
        Storage::disk('public')->put('services/arenda_2.webp', file_get_contents(public_path('seeder_data/services/arenda/arenda_2.webp')), 'public');
        Storage::disk('public')->put('services/arenda_3.webp', file_get_contents(public_path('seeder_data/services/arenda/arenda_3.webp')), 'public');
        Storage::disk('public')->put('services/arenda_4.webp', file_get_contents(public_path('seeder_data/services/arenda/arenda_4.webp')), 'public');
        Storage::disk('public')->put('services/arenda_5.webp', file_get_contents(public_path('seeder_data/services/arenda/arenda_5.webp')), 'public');

        Storage::disk('public')->put('services/hran_1.webp', file_get_contents(public_path('seeder_data/services/hran/hran_1.webp')), 'public');
        Storage::disk('public')->put('services/hran_2.webp', file_get_contents(public_path('seeder_data/services/hran/hran_2.webp')), 'public');
        Storage::disk('public')->put('services/hran_3.webp', file_get_contents(public_path('seeder_data/services/hran/hran_3.webp')), 'public');
        Storage::disk('public')->put('services/hran_4.webp', file_get_contents(public_path('seeder_data/services/hran/hran_4.webp')), 'public');
        Storage::disk('public')->put('services/hran_5.webp', file_get_contents(public_path('seeder_data/services/hran/hran_5.webp')), 'public');
        Storage::disk('public')->put('services/hran_6.webp', file_get_contents(public_path('seeder_data/services/hran/hran_6.webp')), 'public');

        Storage::disk('public')->put('services/sht_1.webp', file_get_contents(public_path('seeder_data/services/selhoz/sht_1.webp')), 'public');
        Storage::disk('public')->put('services/sht_2.webp', file_get_contents(public_path('seeder_data/services/selhoz/sht_2.webp')), 'public');
        Storage::disk('public')->put('services/sht_3.webp', file_get_contents(public_path('seeder_data/services/selhoz/sht_3.webp')), 'public');
        Storage::disk('public')->put('services/sht_4.webp', file_get_contents(public_path('seeder_data/services/selhoz/sht_4.webp')), 'public');
        Storage::disk('public')->put('services/sht_5.webp', file_get_contents(public_path('seeder_data/services/selhoz/sht_5.webp')), 'public');
        Storage::disk('public')->put('services/sht_6.webp', file_get_contents(public_path('seeder_data/services/selhoz/sht_6.webp')), 'public');
        Storage::disk('public')->put('services/sht_7.webp', file_get_contents(public_path('seeder_data/services/selhoz/sht_7.webp')), 'public');
        Storage::disk('public')->put('services/sht_8.webp', file_get_contents(public_path('seeder_data/services/selhoz/sht_8.webp')), 'public');
        Storage::disk('public')->put('services/sht_9.webp', file_get_contents(public_path('seeder_data/services/selhoz/sht_9.webp')), 'public');

        $items = [
            [
                'title' => 'Аренда строительной и сельскохозяйственной специальной техники',
                'slug' => Str::slug('Аренда строительной и сельскохозяйственной специальной техники'),
                'img' => 'services/sht_1.webp',
                'description' => file_get_contents(public_path('seeder_data/services/selhoz/description.html')),
                'galery' => json_encode([
                    ['img' => 'services/sht_1.webp', 'title' => ''],
                    ['img' => 'services/sht_2.webp', 'title' => ''],
                    ['img' => 'services/sht_3.webp', 'title' => ''],
                    ['img' => 'services/sht_4.webp', 'title' => ''],
                    ['img' => 'services/sht_5.webp', 'title' => ''],
                    ['img' => 'services/sht_6.webp', 'title' => ''],
                    ['img' => 'services/sht_7.webp', 'title' => ''],
                    ['img' => 'services/sht_8.webp', 'title' => ''],
                    ['img' => 'services/sht_9.webp', 'title' => ''],
                ]),
                'seo_title' => 'Аренда спецтехники в Курске - строительная и сельхоз техника',
                'seo_description' => 'Предоставляем в аренду строительную и сельскохозяйственную спецтехнику с опытными операторами и гибкими условиями.',
            ],
            [
                'title' => 'Услуги по хранению сельскохозяйственной продукции и семян в г. Курске и Солнцевском районе Курской области',
                'slug' => Str::slug('Услуги по хранению сельскохозяйственной продукции и семян'),
                'img' => 'services/hran_1.webp',
                'description' => file_get_contents(public_path('seeder_data/services/hran/description.html')),
                'galery' => json_encode([
                    ['img' => 'services/hran_1.webp', 'title' => ''],
                    ['img' => 'services/hran_2.webp', 'title' => ''],
                    ['img' => 'services/hran_3.webp', 'title' => ''],
                    ['img' => 'services/hran_4.webp', 'title' => ''],
                    ['img' => 'services/hran_5.webp', 'title' => ''],
                    ['img' => 'services/hran_6.webp', 'title' => ''],
                ]),
                'seo_title' => 'Хранение сельхозпродукции и семян в Курске',
                'seo_description' => 'Услуги хранения сельскохозяйственной продукции и семян: современные мощности, контроль условий и сохранность качества.',
            ],
            [
                'title' => 'Аренда офисных и складских помещений в г. Курске',
                'slug' => Str::slug('Аренда офисных и складских помещений в г. Курске'),
                'img' => 'services/arenda_1.webp',
                'description' => file_get_contents(public_path('seeder_data/services/arenda/description.html')),
                'galery' => json_encode([
                    ['img' => 'services/arenda_1.webp', 'title' => ''],
                    ['img' => 'services/arenda_2.webp', 'title' => ''],
                    ['img' => 'services/arenda_3.webp', 'title' => ''],
                    ['img' => 'services/arenda_4.webp', 'title' => ''],
                    ['img' => 'services/arenda_5.webp', 'title' => ''],
                ]),
                'seo_title' => 'Аренда офисов и складов в Курске',
                'seo_description' => 'Сдаем в аренду офисные и складские помещения в Курске: удобное расположение, развитая инфраструктура и прозрачные условия.',
            ],

        ];

        $itemsForUpsert = array_map(function (array $item): array {
            unset($item['seo_title'], $item['seo_description']);

            return $item;
        }, $items);

        DB::table('product_services')->upsert($itemsForUpsert, ['slug'], ['title', 'img', 'description', 'galery']);

        foreach ($items as $item) {
            DB::table('seo_data')->updateOrInsert(
                ['url' => 'product-services/'.$item['slug']],
                [
                    'url' => 'product-services/'.$item['slug'],
                    'seo_title' => $item['seo_title'] ?? $item['title'],
                    'seo_description' => $item['seo_description'] ?? $item['title'],
                ]
            );
        }
    }
}
