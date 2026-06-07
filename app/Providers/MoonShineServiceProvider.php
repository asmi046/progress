<?php

declare(strict_types=1);

namespace App\Providers;

use App\MoonShine\Resources\EmissionDocument\EmissionDocumentResource;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\MoonShineUser\MoonShineUserResource;
use App\MoonShine\Resources\MoonShineUserRole\MoonShineUserRoleResource;
use App\MoonShine\Resources\NewsEvent\NewsEventResource;
use App\MoonShine\Resources\Page\PageResource;
use App\MoonShine\Resources\ProductService\ProductServiceResource;
use App\MoonShine\Resources\Project\ProjectResource;
use App\MoonShine\Resources\SelhozProduct\SelhozProductResource;
use Illuminate\Support\ServiceProvider;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  CoreContract<MoonShineConfigurator>  $core
     */
    public function boot(CoreContract $core): void
    {
        $core
            ->resources([
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                PageResource::class,
                MenuResource::class,
                EmissionDocumentResource::class,
                NewsEventResource::class,
                ProjectResource::class,
                ProductServiceResource::class,
                SelhozProductResource::class,
            ])
            ->pages([
                ...$core->getConfig()->getPages(),
            ]);
    }
}
