<?php

namespace Shar\Sender\Facades;

use Shar\Sender\Sender as SenderService;
use Illuminate\Support\Facades\Facade;

class Sender extends Facade
{
    //
    protected static function getFacadeAccessor()
    {
        return SenderService::class;
    }
}
