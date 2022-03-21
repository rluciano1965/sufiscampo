<?php

namespace App\DatesConfig;

use Illuminate\Support\Facades\Facade;

class DatesConfigFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'datesconfig';
    }
}
