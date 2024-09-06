<?php

namespace AnuzPandey\HimalayanBank\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AnuzPandey\HimalayanBank\HimalayanBank
 */
class HimalayanBank extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AnuzPandey\HimalayanBank\HimalayanBank::class;
    }
}
