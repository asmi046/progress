<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\ProductService;

use App\Models\ProductService;
use App\MoonShine\Resources\ProductService\Pages\ProductServiceDetailPage;
use App\MoonShine\Resources\ProductService\Pages\ProductServiceFormPage;
use App\MoonShine\Resources\ProductService\Pages\ProductServiceIndexPage;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<ProductService, ProductServiceIndexPage, ProductServiceFormPage, ProductServiceDetailPage>
 */
class ProductServiceResource extends ModelResource
{
    protected string $model = ProductService::class;

    protected string $title = 'Товары и услуги';

    protected string $column = 'title';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            ProductServiceIndexPage::class,
            ProductServiceFormPage::class,
            ProductServiceDetailPage::class,
        ];
    }
}
