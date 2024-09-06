<?php

namespace AnuzPandey\HimalayanBank\Commands;

use Illuminate\Console\Command;

class HimalayanBankCommand extends Command
{
    public $signature = 'laravel-himalayan-bank';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
