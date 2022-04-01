<?php

use function Pest\Laravel\artisan;

it('can output the configured value', function () {
    artisan(\PatStan\Example\Commands\ExampleCommand::class)
        ->expectsOutput(config('example-package.command_output'))
        ->assertExitCode(\Illuminate\Console\Command::SUCCESS);
});

it('can output another configured value dynamically', function () {
    config()->set('example-package.command_output', 'changed');

    artisan(\PatStan\Example\Commands\ExampleCommand::class)
        ->expectsOutput('changed')
        ->assertExitCode(\Illuminate\Console\Command::SUCCESS);
});
