<?php

namespace PatStan\Example\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    public $signature = 'laravel-example-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
