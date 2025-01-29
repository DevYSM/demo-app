<?php

namespace App\Providers;

use App\Examples\RepositoryPattern\Interfaces\BlogRepositoryInterface;
use App\Examples\RepositoryPattern\Repositories\BlogRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
