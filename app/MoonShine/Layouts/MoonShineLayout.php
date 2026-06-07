<?php

declare(strict_types=1);

namespace App\MoonShine\Layouts;

use App\MoonShine\Resources\EmissionDocument\EmissionDocumentResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\NewsEvent\NewsEventResource;
use App\MoonShine\Resources\Page\PageResource;
use App\MoonShine\Resources\ProductService\ProductServiceResource;
use App\MoonShine\Resources\Project\ProjectResource;
use App\MoonShine\Resources\SelhozProduct\SelhozProductResource;
use App\MoonShine\Resources\SeoDataResource;
use MoonShine\ColorManager\ColorManager;
use MoonShine\ColorManager\Palettes\PurplePalette;
use MoonShine\Contracts\ColorManager\ColorManagerContract;
use MoonShine\Contracts\ColorManager\PaletteContract;
use MoonShine\Laravel\Layouts\AppLayout;
use MoonShine\MenuManager\MenuGroup;
use MoonShine\MenuManager\MenuItem;

final class MoonShineLayout extends AppLayout
{
    /**
     * @var null|class-string<PaletteContract>
     */
    protected ?string $palette = PurplePalette::class;

    protected function assets(): array
    {
        return [
            ...parent::assets(),
        ];
    }

    protected function menu(): array
    {
        return [
            MenuItem::make(url('/'), 'Открыть сайт', 'globe-alt')->blank(),
            MenuGroup::make('Общий контент', [
                MenuItem::make(PageResource::class, 'Страницы', 'document-text'),
                MenuItem::make(MenuResource::class, 'Меню')->icon('bars-3-bottom-left'),
                MenuItem::make(SeoDataResource::class, 'SEO данные')->icon('magnifying-glass'),
            ]),

            MenuItem::make(EmissionDocumentResource::class, 'Эмиссионные документы'),
            MenuItem::make(NewsEventResource::class, 'Новости и события'),
            MenuItem::make(ProjectResource::class, 'Проекты'),
            MenuItem::make(ProductServiceResource::class, 'Товары и услуги'),
            MenuItem::make(SelhozProductResource::class, 'Сельхозпродукты'),

            ...parent::menu(),
        ];
    }

    /**
     * @param  ColorManager  $colorManager
     */
    protected function colors(ColorManagerContract $colorManager): void
    {
        parent::colors($colorManager);

        // $colorManager->primary('#00000');
    }
}
