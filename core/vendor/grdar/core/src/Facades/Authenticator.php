<?php 
namespace Grdar\core\Facades;

use  Grdar\core\Facades\Facade;

class Authenticator extends Facade
{
    public static function getAccessor()
    {
        return 'Authenticator';
    }
}
