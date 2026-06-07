Ресурсы админ панели moonshine перечисленных ниже, дополни полями опираясь на соответствующие им миграции и модели.

## Список ресурсов для проставки полей

- app/MoonShine/Resources/EmissionDocument/EmissionDocumentResource.php
- app/MoonShine/Resources/NewsEvent/NewsEventResource.php
- app/MoonShine/Resources/ProductService/ProductServiceResource.php
- app/MoonShine/Resources/Project/ProjectResource.php
- app/MoonShine/Resources/SelhozProduct/SelhozProductResource.php

В класс ресурса добавь поле $title и присвой ему значение соответствующее по смыслу назначению ресурса.

Так же в класс ресурса добавь поле $column если в ресурсе есть поле title то присвой $column = 'title' если нет топ одбери поле идентифицирующее элемент модели ресурса.

При формировании полей используй ->comment в миграции в качестве имени поля. Пример: Text::make("Заголовок", 'title') если нет такого назови поле по смыслу,
Для полей миграции с именами img, image, picture используй компонент Image так же добавляй ->removable(). Пример: Image::make('Изображение', 'img')->removable(),
Для полей миграции с именем slug используй компонент Slug. Пример: Slug::make("Ссылка", 'slug'),
Для полей миграции с типом boolean используй компонент Switcher. Пример: Switcher::make('По умолчанию', 'is_default'),
Для полей миграции с именем description, comment, text используй компонент TinyMce. Пример: TinyMce::make('Описание', 'description'),
Для полей миграции с типом оson используй компонент Json, с модификаторм ->fields в котором по умолчанию должно быть поле Position::make(). Обязательно добавляй модификатор ->removable() для обеспечения возможности удаления записи. Пример:
Json::make('Галерея', 'images')->fields([
Position::make(),
])->removable(),

Так же опираясь на миграцию заполни метод rules, при этом не включай поля которые в миграции помеченны nullable(), так же не включай поле slug

Так же добавь метод filters по следующему шаблону

    protected function filters(): iterable
    {
        return [

        ];
    }

Фильтры сформируй опираясь на поля модели.
