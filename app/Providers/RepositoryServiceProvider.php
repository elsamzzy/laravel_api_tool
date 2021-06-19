<?php

namespace App\Providers;

// use App\Interfaces\Users\UsersInterface;
// use App\Repositories\Users\UsersRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /*
        // Bind your interfaces and your repositories here like below, don't forget your imports
        $this->app->bind(
            UsersInterface::class,
            UsersRepository::class
        );
        */
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
