<?php

namespace App\Containers\Todo\Todo\Providers;

use App\Ship\Parents\Providers\MainServiceProvider as ParentMainServiceProvider;
use Illuminate\Support\Facades\View;

/**
 * The Main Service Provider of this container.
 * It will be automatically registered by the framework.
 */
class MainServiceProvider extends ParentMainServiceProvider
{
    public array $serviceProviders = [
    ];

    public array $aliases = [];

    public function boot(): void
    {
        View::addLocation(base_path('app/Containers/Todo/Todo/UI/WEB/Views'));
    }

}
