<?php

namespace App\Facades;

use App\Services\ArashSimpleService;
use Illuminate\Support\Facades\App;

class ArashFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return ArashSimpleService::class;
    }
}
