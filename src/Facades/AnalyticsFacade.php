<?php

namespace LidyaPos\Analytics\Facades;

use LidyaPos\Analytics\Analytics;
use Illuminate\Support\Facades\Facade;

/**
 * @see \LidyaPos\Analytics\Analytics
 */
class AnalyticsFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Analytics::class;
    }
}
