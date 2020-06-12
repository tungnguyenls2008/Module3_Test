<?php

namespace App\Providers;

use App\Repositories\Eloquent\EmployeeEloquentRepository;
use App\Repositories\EmployeeRepositoryInterface;
use App\Services\EmployeeServiceInterface;
use App\Services\Imple\EmployeeService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            EmployeeRepositoryInterface::class,
            EmployeeEloquentRepository::class
        );

        $this->app->singleton(
            EmployeeServiceInterface::class,
            EmployeeService::class
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
