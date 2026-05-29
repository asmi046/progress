<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_services')->upsert([
            [
                'title' => 'Поставки сельскохозяйственной продукции',
                'slug' => Str::slug('Поставки сельскохозяйственной продукции'),
                'img' => '/storage/services/service-1.jpg',
                'description' => 'Комплексные поставки зерновых и масличных культур.',
            ],
            [
                'title' => 'Услуги хранения и логистики',
                'slug' => Str::slug('Услуги хранения и логистики'),
                'img' => '/storage/services/service-2.jpg',
                'description' => 'Организация хранения и транспортировки продукции.',
            ],
        ], ['slug'], ['title', 'img', 'description']);
    }
}
