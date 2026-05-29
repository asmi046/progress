<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Page\Pages;

use App\Models\Page\Page;
use App\MoonShine\Resources\Page\PageResource;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Pages\Crud\IndexPage;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;

/**
 * @extends IndexPage<PageResource>
 */
final class PageIndexPage extends IndexPage
{
    /**
     * @return list<FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            ID::make()->sortable(),

            Text::make('Заголовок', 'title')
                ->sortable(),

            Text::make('Slug', 'slug')
                ->sortable(),

            BelongsTo::make(
                'Родительская страница',
                'parent_page',
                formatted: static fn (Page $model) => $model->title,
                resource: PageResource::class,
            ),

            Text::make('Шаблон', 'template'),
        ];
    }
}
