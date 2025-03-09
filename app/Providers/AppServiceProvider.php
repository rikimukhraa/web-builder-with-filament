<?php

namespace App\Providers;

use App\Service\Menu\ListService;
use App\Service\Menu\MenuInterfaces\MenuInterface;
use App\Service\Menu\PostService;
use Illuminate\Support\ServiceProvider;
use App\View\AppLayout;
use App\View\Components\AppLayout as ComponentsAppLayout;
use App\View\Components\GuestLayout as ComponentsGuestLayout;
use App\View\GuestLayout;
use Illuminate\Support\Facades\Blade;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(MenuInterface::class,ListService::class,PostService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('layouts.app', ComponentsAppLayout::class);
        Blade::component('layouts.guest', ComponentsGuestLayout::class);
    }
}
