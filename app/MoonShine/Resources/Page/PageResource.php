<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Page;

use App\Models\Page\Page;
use App\MoonShine\Resources\Page\Pages\PageFormPage;
use App\MoonShine\Resources\Page\Pages\PageIndexPage;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\MenuManager\Attributes\Group;
use MoonShine\MenuManager\Attributes\Order;
use MoonShine\Support\Attributes\Icon;
use MoonShine\Support\Enums\Action;
use MoonShine\Support\ListOf;

/**
 * @extends ModelResource<Page, PageIndexPage, PageFormPage, null>
 */
#[Icon('document-text')]
#[Group('Контент', 'Страницы')]
#[Order(10)]
class PageResource extends ModelResource
{
    protected string $model = Page::class;

    protected string $column = 'title';

    protected bool $simplePaginate = true;

    public function getTitle(): string
    {
        return 'Страницы';
    }

    protected function activeActions(): ListOf
    {
        return parent::activeActions()->except(Action::VIEW);
    }

    protected function pages(): array
    {
        return [
            PageIndexPage::class,
            PageFormPage::class,
        ];
    }

    protected function search(): array
    {
        return [
            'id',
            'title',
            'slug',
            'template',
        ];
    }
}
