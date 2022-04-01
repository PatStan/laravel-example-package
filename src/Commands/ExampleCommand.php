<?php

namespace PatStan\Example\Commands;

use Illuminate\Console\Command;

class ExampleCommand extends Command
{
    public $signature = 'my-command';

    public $description = 'My command';

    public function handle(): int
    {
        $text = config('example-package.command_output');

        $this->comment($text);

        return self::SUCCESS;
    }
}
