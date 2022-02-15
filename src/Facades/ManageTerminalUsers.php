<?php

namespace BitBoss\LaravelTerminalUsers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BitBoss\LaravelTerminalUsers\LaravelTerminalUsers
 */
class LaravelTerminalUsers extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'LaravelTerminalUsers';
    }
}
