<?php

namespace Srmklive\PayPal\Facades;

/*
 * Class Facade
 * @package Srmklive\PayPal\Facades
 * @see Srmklive\PayPal\Services\PayPal
 */

use Illuminate\Support\Facades\Facade;
use Srmklive\PayPal\PayPalFacadeAccessor;

class PayPal extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return PayPalFacadeAccessor::class;
    }
}
