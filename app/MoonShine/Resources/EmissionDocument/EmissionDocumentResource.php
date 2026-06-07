<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\EmissionDocument;

use App\Models\EmissionDocument;
use App\MoonShine\Resources\EmissionDocument\Pages\EmissionDocumentDetailPage;
use App\MoonShine\Resources\EmissionDocument\Pages\EmissionDocumentFormPage;
use App\MoonShine\Resources\EmissionDocument\Pages\EmissionDocumentIndexPage;
use MoonShine\Contracts\Core\PageContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<EmissionDocument, EmissionDocumentIndexPage, EmissionDocumentFormPage, EmissionDocumentDetailPage>
 */
class EmissionDocumentResource extends ModelResource
{
    protected string $model = EmissionDocument::class;

    protected string $title = 'Эмиссионные документы';

    protected string $column = 'title';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            EmissionDocumentIndexPage::class,
            EmissionDocumentFormPage::class,
            EmissionDocumentDetailPage::class,
        ];
    }
}
