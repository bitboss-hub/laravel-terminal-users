<?php

namespace BitBoss\LaravelTerminalUsers;

use BitBoss\LaravelTerminalUsers\Commands\LaravelTerminalUsersCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelTerminalUsersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */

        $package
            ->name('manage-terminal-users')
            ->hasConfigFile()
            //->hasViews()
            //->hasMigration('create_LaravelTerminalUsers_table')
            ->hasCommand(LaravelTerminalUsersCommand::class);
    }
}
