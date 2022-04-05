<?php

namespace PatStan\Example;

use Illuminate\Support\Facades\Route;
use PatStan\Example\Commands\ExampleCommand;
use PatStan\Example\Http\Controllers\MyController;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-example-package')
            ->hasConfigFile()
//            ->hasViews()
            ->hasMigration('create_my_models_table')
            ->hasCommand(ExampleCommand::class);
    }

    public function packageRegistered()
    {
        Route::macro('example', function (string $baseUrl = 'example') {
            Route::prefix($baseUrl)->group(function () {
                Route::get('/', [MyController::class, 'index']);
            });
        });

        //in the project
        //Route::example('custom-route); "/custom-route"
    }
}
