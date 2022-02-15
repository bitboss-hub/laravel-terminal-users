<?php

namespace BitBoss\ManageTerminalUsers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BitBoss\ManageTerminalUsers\ManageTerminalUsers
 */
class ManageTerminalUsers extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'manageterminalusers';
    }
}
