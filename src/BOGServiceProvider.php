<?php

namespace Chaiqou\BOG;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Chaiqou\BOG\Commands\BOGCommand;

class BOGServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('bog')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_bog_table')
            ->hasCommand(BOGCommand::class);
    }
}
