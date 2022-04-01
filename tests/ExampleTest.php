<?php

use function Pest\Laravel\artisan;

it('can test', function () {
    artisan(\PatStan\Example\Commands\ExampleCommand::class)->assertExitCode(\Illuminate\Console\Command::SUCCESS);
});
