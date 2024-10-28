<?php

namespace Chaiqou\BOG\Commands;

use Illuminate\Console\Command;

class BOGCommand extends Command
{
    public $signature = 'bog';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
