<?php namespace Einice\Confide;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

/**
 * @see \Einice\Confide\Facade
 * @package Einice\Confide
 */
class Facade extends IlluminateFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'confide';
    }
}
