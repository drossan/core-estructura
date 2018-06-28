<?php 
namespace Grdar\core\Facades;

use  Grdar\core\Facades\Facade;

class Mail extends Facade
{
    public static function getAccessor()
    {
        return 'Mail';
    }
}
