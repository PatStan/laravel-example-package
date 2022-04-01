<?php

namespace PatStan\Example;

use PatStan\Example\Commands\ExampleCommand;
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
}
