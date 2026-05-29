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
        $mainMenuItems = [
            [
                'title' => 'Главная',
                'order' => 1,
                'lnk' => '/',
            ],
            [
                'title' => 'Товары и услуги',
                'order' => 2,
                'lnk' => '/page/tovary-i-uslugi',
            ],
            [
                'title' => 'Раскрытие информации',
                'order' => 3,
                'lnk' => '/page/raskrytie-informacii',
            ],
            [
                'title' => 'Инвесторам',
                'order' => 4,
                'lnk' => '/page/investoram',
            ],
            [
                'title' => 'Контакты',
                'order' => 5,
                'lnk' => '/contacts',
            ],
        ];

        DB::table('menus')->insert(array_map(
            static fn (array $item): array => [
                'menu_name' => 'Главное меню',
                ...$item,
            ],
            $mainMenuItems,
        ));

        $emitDocsItemId = DB::table('menus')
            ->where('menu_name', 'Главное меню')
            ->where('title', 'Раскрытие информации')
            ->where('lnk', '/page/raskrytie-informacii')
            ->value('id');

        if ($emitDocsItemId !== null) {
            DB::table('menus')->insert([
                'menu_name' => 'Главное меню',
                'title' => 'Эмиссионные документы',
                'order' => 1,
                'parent' => $emitDocsItemId,
                'lnk' => '/page/emissionnye-dokumenty',
            ]);
        }

        $investorsItemId = DB::table('menus')
            ->where('menu_name', 'Главное меню')
            ->where('title', 'Инвесторам')
            ->where('lnk', '/page/investoram')
            ->value('id');

        if ($investorsItemId !== null) {
            DB::table('menus')->insert([
                'menu_name' => 'Главное меню',
                'title' => 'Наши проекты',
                'order' => 1,
                'parent' => $investorsItemId,
                'lnk' => '/page/nashi-proekty',
            ]);
        }

        DB::table('menus')->insert([
            ...array_map(
                static fn (array $item): array => [
                    'menu_name' => 'Боковое меню',
                    ...$item,
                ],
                $mainMenuItems,
            ),
            ...array_map(
                static fn (array $item): array => [
                    'menu_name' => 'Меню в подвале',
                    ...$item,
                ],
                $mainMenuItems,
            ),
        ]);

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
