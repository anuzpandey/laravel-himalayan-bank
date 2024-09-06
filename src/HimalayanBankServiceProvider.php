<?php

namespace AnuzPandey\HimalayanBank;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AnuzPandey\HimalayanBank\Commands\HimalayanBankCommand;

class HimalayanBankServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-himalayan-bank')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_himalayan_bank_table')
            ->hasCommand(HimalayanBankCommand::class);
    }
}
