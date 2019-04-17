<?php
namespace GRDAR;

use Drossan\core\Container;
use Drossan\core\Facades\Facade;
/********************************************************/
/*********************** CLASS **************************/
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/constantes.php';

// Uso de inyección de dependencias
$container = Container::getInstance();
Facade::setContainer($container);

require_once __DIR__.'/app.php';


if(ENV == 'development') {
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
}