<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Packages\Application\UseCase\User\Register\UserRegisterService;
use Packages\Application\UseCase\User\Register\UserRegisterServiceInterface;
use Packages\Domain\User\UserFactoryInterface;
use Packages\Domain\User\UserRepositoryInterface;
use Packages\Infrastructure\Eloquent\UserFactory;
use Packages\Infrastructure\Eloquent\UserRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            UserRegisterServiceInterface::class,
            UserRegisterService::class
        );

        $this->app->bind(
            UserFactoryInterface::class,
            UserFactory::class
        );

        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
