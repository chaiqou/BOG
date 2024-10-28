<?php

namespace Chaiqou\BOG\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chaiqou\BOG\BOG
 */
class BOG extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Chaiqou\BOG\BOG::class;
    }
}
