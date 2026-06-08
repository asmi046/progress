<?php

namespace Database\Seeders;

use App\Models\SelhozProduct;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SelhozProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put('sp/soya.webp', file_get_contents(public_path('seeder_data/sp/soya.webp')), 'public');
        Storage::disk('public')->put('sp/phenitsa.webp', file_get_contents(public_path('seeder_data/sp/phenitsa.webp')), 'public');
        Storage::disk('public')->put('sp/yachmen.webp', file_get_contents(public_path('seeder_data/sp/yachmen.webp')), 'public');
        Storage::disk('public')->put('sp/kukuruza.webp', file_get_contents(public_path('seeder_data/sp/kukuruza.webp')), 'public');
        Storage::disk('public')->put('sp/podsolnehnik.webp', file_get_contents(public_path('seeder_data/sp/podsolnehnik.webp')), 'public');
        Storage::disk('public')->put('sp/test.pdf', file_get_contents(public_path('seeder_data/sp/test.pdf')), 'public');

        $products = [
            [
                'title' => 'Соя',
                'slug' => Str::slug('Соя'),
                'img' => 'sp/soya.webp',
                'description' => file_get_contents(public_path('seeder_data/sp/soya_description.html')),
                'galery' => null,
                'sertificates' => json_encode([
                    ['file' => 'sp/test.pdf', 'title' => 'Соя тестовый сертификат'],
                ]),
                'seo_title' => 'Соя оптом в Курске - продажа сельхозпродукции',
                'seo_description' => 'Реализация сои от ЗАО «ПРОГРЕСС»: стабильные поставки, контроль качества и выгодные условия сотрудничества.',
            ],
            [
                'title' => 'Пшеница (3-й, 4-й класс)',
                'slug' => Str::slug('Пшеница (3-й, 4-й класс)'),
                'img' => 'sp/phenitsa.webp',
                'description' => file_get_contents(public_path('seeder_data/sp/phenitsa_description.html')),
                'galery' => null,
                'sertificates' => json_encode([
                    ['file' => 'sp/test.pdf', 'title' => 'Пшеница тестовый сертификат'],
                ]),

                'seo_title' => 'Пшеница 3 и 4 класса - продажа в Курске',
                'seo_description' => 'Поставка продовольственной пшеницы 3 и 4 класса: подтвержденное качество, быстрые отгрузки и удобная логистика.',
            ],
            [
                'title' => 'Пивоваренный ячмень',
                'slug' => Str::slug('Пивоваренный ячмень'),
                'img' => 'sp/yachmen.webp',
                'description' => file_get_contents(public_path('seeder_data/sp/yachmen_description.html')),
                'galery' => null,
                'sertificates' => json_encode([
                    ['file' => 'sp/test.pdf', 'title' => 'Пивоваренный ячмень тестовый сертификат'],
                ]),
                'sertificates' => null,
                'seo_title' => 'Пивоваренный ячмень - реализация сельхозпродукции',
                'seo_description' => 'Качественный пивоваренный ячмень от производителя: соответствие требованиям отрасли и надежные поставки.',
            ],
            [
                'title' => 'Кукуруза',
                'slug' => Str::slug('Кукуруза'),
                'img' => 'sp/kukuruza.webp',
                'description' => file_get_contents(public_path('seeder_data/sp/kukuruza_description.html')),
                'galery' => null,
                'sertificates' => json_encode([
                    ['file' => 'sp/test.pdf', 'title' => 'Кукуруза тестовый сертификат'],
                ]),
                'seo_title' => 'Кукуруза оптом - продажа в Курске и области',
                'seo_description' => 'Реализация кукурузы от ЗАО «ПРОГРЕСС»: стабильные объемы, подтвержденное качество и прозрачные условия поставки.',
            ],
            [
                'title' => 'Подсолнечник',
                'slug' => Str::slug('Подсолнечник'),
                'img' => 'sp/podsolnehnik.webp',
                'description' => file_get_contents(public_path('seeder_data/sp/podsolnehnik_description.html')),
                'galery' => null,
                'sertificates' => json_encode([
                    ['file' => 'sp/test.pdf', 'title' => 'Подсолнечник тестовый сертификат'],
                ]),
                'seo_title' => 'Подсолнечник - реализация сельскохозяйственной продукции',
                'seo_description' => 'Продажа подсолнечника с гарантией качества: надежный поставщик, своевременная отгрузка и удобные условия сотрудничества.',
            ],
        ];

        $productsForUpsert = array_map(function (array $item): array {
            unset($item['seo_title'], $item['seo_description']);

            return $item;
        }, $products);

        SelhozProduct::query()->upsert($productsForUpsert, ['slug'], ['title', 'img', 'description', 'galery', 'sertificates']);

        foreach ($products as $item) {
            DB::table('seo_data')->updateOrInsert(
                ['url' => 'product-services/selhoz/'.$item['slug']],
                [
                    'url' => 'product-services/selhoz/'.$item['slug'],
                    'seo_title' => $item['seo_title'] ?? $item['title'],
                    'seo_description' => $item['seo_description'] ?? $item['title'],
                ]
            );
        }
    }
}
