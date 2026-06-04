<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('menus')->truncate();
        Schema::enableForeignKeyConstraints();

        $mainMenuItems = [
            [
                'title' => 'Главная',
                'order' => 1,
                'lnk' => '/',
            ],
            [
                'title' => 'Товары и услуги',
                'order' => 2,
                'lnk' => '/product-services',
            ],
            [
                'title' => 'Раскрытие информации',
                'order' => 3,
                'lnk' => '/page/raskrytie-informacii',
                'children' => [
                    [
                        'title' => 'Эмиссионные документы',
                        'order' => 1,
                        'lnk' => '/emission-documents',
                    ],
                ],
            ],
            [
                'title' => 'Инвесторам',
                'order' => 4,
                'lnk' => '/page/investoram',
                'children' => [
                    [
                        'title' => 'Наши проекты',
                        'order' => 1,
                        'lnk' => '/projects',
                    ],
                    [
                        'title' => 'Новости и события',
                        'order' => 2,
                        'lnk' => '/news-events',
                    ],
                ],
            ],
            [
                'title' => 'Контакты',
                'order' => 5,
                'lnk' => '/contacts',
            ],
        ];

        $sideMenuItems = [
            [
                'title' => 'Главная',
                'order' => 1,
                'lnk' => '/',
            ],
            [
                'title' => 'Товары и услуги',
                'order' => 2,
                'lnk' => '/product-services',
            ],
            [
                'title' => 'Раскрытие информации',
                'order' => 3,
                'lnk' => '/page/raskrytie-informacii',
            ],
            [
                'title' => 'Эмиссионные документы',
                'order' => 3,
                'lnk' => '/emission-documents',
            ],
            [
                'title' => 'Инвесторам',
                'order' => 4,
                'lnk' => '/page/investoram',
            ],
            [
                'title' => 'Наши проекты',
                'order' => 4,
                'lnk' => '/projects',
            ],

            [
                'title' => 'Новости и события',
                'order' => 4,
                'lnk' => '/news-events',
            ],
            [
                'title' => 'Контакты',
                'order' => 5,
                'lnk' => '/contacts',
            ],
        ];

        $footerMenuItems = [
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

        $lawMenuItems = [
            [
                'title' => 'Политика в области обработки персональных данных',
                'order' => 1,
                'lnk' => '/page/politika-v-oblasti-obrabotki-personalnyx-dannyx',
            ],
            [
                'title' => 'Согласие на обработку персональных данных',
                'order' => 1,
                'lnk' => '/page/soglasie-na-obrabotku-personalnyx-dannyx',
            ],
            [
                'title' => 'О файлах Cookie',
                'order' => 1,
                'lnk' => '/page/o-failax-cookie',
            ],
        ];

        $this->insertMenuTree('Главное меню', $mainMenuItems);
        $this->insertMenuTree('Боковое меню', $sideMenuItems);
        $this->insertMenuTree('Меню в подвале', $footerMenuItems);
        $this->insertMenuTree('Меню по ФЗ', $lawMenuItems);
    }

    private function insertMenuTree(string $menuName, array $items, ?int $parentId = null): void
    {
        foreach ($items as $item) {
            $children = $item['children'] ?? [];
            unset($item['children']);

            $menuItemId = DB::table('menus')->insertGetId([
                'menu_name' => $menuName,
                'parent' => $parentId,
                ...$item,
            ]);

            if (! empty($children)) {
                $this->insertMenuTree($menuName, $children, $menuItemId);
            }
        }
    }
}
