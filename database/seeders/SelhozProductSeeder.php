<?php

namespace Database\Seeders;

use App\Models\SelhozProduct;
use Illuminate\Database\Seeder;
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

        SelhozProduct::query()->upsert([
            [
                'title' => 'Соя',
                'slug' => Str::slug('Соя'),
                'img' => 'sp/soya.webp',
                'description' => 'Соя.',
                'galery' => null,
                'sertificates' => null,
            ],
            [
                'title' => 'Пшеница (3-й, 4-й класс)',
                'slug' => Str::slug('Пшеница (3-й, 4-й класс)'),
                'img' => 'sp/phenitsa.webp',
                'description' => 'Пшеница 3-го и 4-го класса.',
                'galery' => null,
                'sertificates' => null,
            ],
            [
                'title' => 'Пивоваренный ячмень',
                'slug' => Str::slug('Пивоваренный ячмень'),
                'img' => 'sp/yachmen.webp',
                'description' => 'Пивоваренный ячмень.',
                'galery' => null,
                'sertificates' => null,
            ],
            [
                'title' => 'Кукуруза',
                'slug' => Str::slug('Кукуруза'),
                'img' => 'sp/kukuruza.webp',
                'description' => 'Кукуруза.',
                'galery' => null,
                'sertificates' => null,
            ],
            [
                'title' => 'Подсолнечник',
                'slug' => Str::slug('Подсолнечник'),
                'img' => 'sp/podsolnehnik.webp',
                'description' => 'Подсолнечник.',
                'galery' => null,
                'sertificates' => null,
            ],
        ], ['slug'], ['title', 'img', 'description', 'galery', 'sertificates']);
    }
}
