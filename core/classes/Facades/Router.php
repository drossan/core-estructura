<?php 
namespace GRDAR\Facades;

use  Grdar\core\Facades\Facade;

class Router extends Facade
{
    public static function getAccessor()
    {
        return 'Rout';
    }
}