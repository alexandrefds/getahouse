<?php

namespace App\Providers;

use App\Services\User\UserService;
use App\Services\User\UserServiceContract;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(
            UserServiceContract::class,
            UserService::class
        );
    }

    public function provides(): array
    {
        return [
            UserServiceContract::class,
        ];
    }
}
