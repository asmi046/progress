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
                'title' => 'Главная',
                'order' => 1,
                'lnk' => '/',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Товары и услуги',
                'order' => 2,
                'lnk' => '/page/tovary-i-uslugi',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Инвесторам',
                'order' => 3,
                'lnk' => '/page/investoram',
            ],
            [
                'menu_name' => 'Главное меню',
                'title' => 'Контакты',
                'order' => 4,
                'lnk' => '/contacts',
            ],

        ];

        DB::table('menus')->insert($data);

        $data_law = [
            [
                'menu_name' => 'Меню по ФЗ',
                'title' => 'Политика в области обработки персональных данных',
                'order' => 1,
                'lnk' => '/page/politika-v-oblasti-obrabotki-personalnyx-dannyx',
            ],

            [
                'menu_name' => 'Меню по ФЗ',
                'title' => 'Согласие на обработку персональных данных',
                'order' => 1,
                'lnk' => '/page/soglasie-na-obrabotku-personalnyx-dannyx',
            ],
            [
                'menu_name' => 'Меню по ФЗ',
                'title' => 'О файлах Cookie',
                'order' => 1,
                'lnk' => '/page/o-failax-cookie',
            ],

        ];

        DB::table('menus')->insert($data_law);

    }
}
