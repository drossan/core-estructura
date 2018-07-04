<?php 
namespace GRDAR\Facades;

use  Grdar\core\Facades\Facade;

class CreateFacade extends Facade
{
    public function __construct($value, $key)
    {
        eval("
            class $value extends Grdar\\core\\Facades\\Facade {
                public static function getAccessor() 
                {
                    return '$key';
                }
            };"
        );
        class_alias("$value", $key);
    }
}