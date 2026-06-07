<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\SelhozProduct\Pages;

use App\MoonShine\Resources\SelhozProduct\SelhozProductResource;
use MoonShine\Contracts\Core\TypeCasts\DataWrapperContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\FormBuilderContract;
use MoonShine\Laravel\Fields\Slug;
use MoonShine\Laravel\Pages\Crud\FormPage;
use MoonShine\Support\ListOf;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\FormBuilder;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Position;
use MoonShine\UI\Fields\Text;
use Throwable;

/**
 * @extends FormPage<SelhozProductResource>
 */
class SelhozProductFormPage extends FormPage
{
    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function fields(): iterable
    {
        return [
            Box::make([
                ID::make(),

                Text::make('Заголовок', 'title')
                    ->required(),

                Slug::make('Ссылка', 'slug'),

                Image::make('Изображение', 'img')->removable(),

                TinyMce::make('Описание', 'description'),

                Json::make('Галерея', 'galery')->fields([
                    Position::make(),
                ])->removable(),

                Json::make('Сертификаты', 'sertificates')->fields([
                    Position::make(),
                ])->removable(),
            ]),
        ];
    }

    protected function buttons(): ListOf
    {
        return parent::buttons();
    }

    protected function formButtons(): ListOf
    {
        return parent::formButtons();
    }

    protected function rules(DataWrapperContract $item): array
    {
        return [
            'title' => ['required', 'string', 'max:700'],
        ];
    }

    protected function beforeSaving(mixed $item): mixed
    {
        if (is_string($item->galery) && $item->galery !== '') {
            $decodedGalery = json_decode($item->galery, true);

            if (json_last_error() === JSON_ERROR_NONE && is_array($decodedGalery)) {
                $item->galery = $decodedGalery;
            }
        }

        if (is_string($item->sertificates) && $item->sertificates !== '') {
            $decodedSertificates = json_decode($item->sertificates, true);

            if (json_last_error() === JSON_ERROR_NONE && is_array($decodedSertificates)) {
                $item->sertificates = $decodedSertificates;
            }
        }

        return $item;
    }

    /**
     * @param  FormBuilder  $component
     * @return FormBuilder
     */
    protected function modifyFormComponent(FormBuilderContract $component): FormBuilderContract
    {
        return $component;
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function topLayer(): array
    {
        return [
            ...parent::topLayer(),
        ];
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function mainLayer(): array
    {
        return [
            ...parent::mainLayer(),
        ];
    }

    /**
     * @return list<ComponentContract>
     *
     * @throws Throwable
     */
    protected function bottomLayer(): array
    {
        return [
            ...parent::bottomLayer(),
        ];
    }
}
