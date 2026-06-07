<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\NewsEvent;

use App\Models\NewsEvent;
use App\MoonShine\Resources\NewsEvent\Pages\NewsEventDetailPage;
use App\MoonShine\Resources\NewsEvent\Pages\NewsEventFormPage;
use App\MoonShine\Resources\NewsEvent\Pages\NewsEventIndexPage;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<NewsEvent, NewsEventIndexPage, NewsEventFormPage, NewsEventDetailPage>
 */
class NewsEventResource extends ModelResource
{
    protected string $model = NewsEvent::class;

    protected string $title = 'Новости и события';

    protected string $column = 'title';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            NewsEventIndexPage::class,
            NewsEventFormPage::class,
            NewsEventDetailPage::class,
        ];
    }
}
