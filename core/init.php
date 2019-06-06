<?php
namespace GRDAR;

use Drossan\core\Container\Container,
    Drossan\core\Error\ErrorException,
    Drossan\core\Facades\Facade;

if ( ! file_exists(__DIR__ . '/vendor/autoload.php'))
    throw new Exception("Autoload file not found.");
    
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/constantes.php';

// Uso de inyección de dependencias
$container = Container::init();
Facade::setContainer($container);

require_once __DIR__.'/app.php';

if(ENVIRONMENT == 'development') new ErrorException();