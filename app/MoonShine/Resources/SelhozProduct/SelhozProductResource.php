<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\SelhozProduct;

use App\Models\SelhozProduct;
use App\MoonShine\Resources\SelhozProduct\Pages\SelhozProductDetailPage;
use App\MoonShine\Resources\SelhozProduct\Pages\SelhozProductFormPage;
use App\MoonShine\Resources\SelhozProduct\Pages\SelhozProductIndexPage;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<SelhozProduct, SelhozProductIndexPage, SelhozProductFormPage, SelhozProductDetailPage>
 */
class SelhozProductResource extends ModelResource
{
    protected string $model = SelhozProduct::class;

    protected string $title = 'Сельхозпродукция';

    protected string $column = 'title';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            SelhozProductIndexPage::class,
            SelhozProductFormPage::class,
            SelhozProductDetailPage::class,
        ];
    }
}
