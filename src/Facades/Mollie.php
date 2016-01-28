<?php
namespace Sniels\LaravelMollie\Facades;
class Mollie extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor() { return 'mollie'; }
}