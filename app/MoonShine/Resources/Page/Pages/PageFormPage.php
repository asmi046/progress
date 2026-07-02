<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\Page\Pages;

use App\Models\Page\Page;
use App\MoonShine\Resources\Page\PageResource;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\File;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Position;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;

/**
 * @extends FormPage<PageResource, Page>
 */
final class PageFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Tabs::make([
                Tab::make('Основная информация', [
                    ID::make(),
                    Text::make('Заголовок', 'title'),
                    Slug::make('Ссылка', 'slug'),
                    BelongsTo::make('Родительская', 'parent_page', formatted: 'title', resource: PageResource::class),
                    Text::make('Шаблон', 'template'),
                    TinyMce::make('Описание', 'description')->addOption('file_manager', 'laravel-filemanager'),
                ]),
                Tab::make('Изображения', [
                    Image::make('Картинка', 'img')->dir('page')->removable(),
                    Json::make('Галерея', 'images')->fields([
                        Position::make(),
                        Text::make('Название', 'title'),
                        Image::make('Изображение', 'img')->dir('page')->removable(),
                    ]),
                ]),

                Tab::make('Файлы', [
                    Json::make('Файлы', 'files')->fields([
                        Position::make(),
                        Text::make('Название', 'title'),
                        Textarea::make('Описание', 'description'),
                        File::make('Файл', 'file')->dir('page')->removable(),
                    ])->removable(),
                ]),
            ]),
        ];
    }

    protected function beforeSaving(mixed $item): mixed
    {
        if (is_string($item->images) && $item->images !== '') {
            $decodedImages = json_decode($item->images, true);

            if (json_last_error() === JSON_ERROR_NONE && is_array($decodedImages)) {
                $item->images = $decodedImages;
            }
        }

        if (is_string($item->files) && $item->files !== '') {
            $decodedFiles = json_decode($item->files, true);

            if (json_last_error() === JSON_ERROR_NONE && is_array($decodedFiles)) {
                $item->files = $decodedFiles;
            }
        }

        return $item;
    }

    protected function rules(DataWrapperContract $item): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'parent' => ['nullable', 'integer', 'exists:pages,id'],
            'template' => ['nullable', 'string', 'max:255'],
            'img' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'images' => ['nullable'],
            'files' => ['nullable'],
        ];
    }
}
