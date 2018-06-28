<?php
namespace GRDAR;

use Grdar\core\Container;
use Grdar\core\Views\View;
use Grdar\core\Paths\Paths;
use Grdar\core\Routes\Router;

use GRDAR\Mail\Mail;

/********************************************************/
/*********************** CLASS **************************/
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/constantes.php';

// Uso de inyección de dependencias
$container = Container::getInstance();
\Grdar\core\Facades\Facade::setContainer($container);

class_alias('GRDAR\Facades\Router', 'Rout');
class_alias('GRDAR\Facades\View', 'View');
class_alias('GRDAR\Facades\Mail', 'Mail');

class_alias('GRDAR\Controllers\IndexController', 'Index');

$container->instance('Rout', new Router);
$container->instance('View', new View);
$container->instance('Mail', new Mail);

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();