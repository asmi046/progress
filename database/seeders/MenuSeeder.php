<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'menu_name' => 'Главное меню',
                'title' => 'О компании',
                'order' => 1,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Товары и услуги',
                'order' => 2,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Инвесторам',
                'order' => 3,
                'lnk' => '#',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Контакты',
                'order' => 4,
                'lnk' => '#',
            ],

        ];

        DB::table('menus')->insert($data);

    }
}
