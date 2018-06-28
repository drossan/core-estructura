<?php 
namespace GRDAR\Facades;

use  Grdar\core\Facades\Facade;

class View extends Facade
{
    public static function getAccessor()
    {
        return 'View';
    }
}
