<?php

namespace BitBoss\ManageTerminalUsers;

use BitBoss\ManageTerminalUsers\Commands\ManageTerminalUsersCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ManageTerminalUsersServiceProvider extends PackageServiceProvider
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
            //->hasMigration('create_manageterminalusers_table')
            ->hasCommand(ManageTerminalUsersCommand::class);
    }
}
