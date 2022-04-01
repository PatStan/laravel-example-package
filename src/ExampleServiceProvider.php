<?php

namespace PatStan\Example;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use PatStan\Example\Commands\ExampleCommand;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-example-package')
            ->hasConfigFile()
//            ->hasViews()
//            ->hasMigration('create_laravel-example-package_table')
            ->hasCommand(ExampleCommand::class);
    }
}
