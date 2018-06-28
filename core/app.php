<?php
namespace GRDAR;
/*  
    Registro de Facades 
*/
$class_alias = array(
    'Rout'  => Facades\Router::class,
    'View'  => Facades\View::class,
    'Mail'  => Facades\Mail::class,
    'Index' => Controllers\IndexController::class
);
foreach ($class_alias as $key => $value) {
    class_alias($value, $key);
}

/*  
    Instanciar clase 
*/
$con = array(
    'Rout'  => \Grdar\core\Routes\Router::class,
    'View'  => \Grdar\core\Views\View::class,
    'Mail'  => Mail\Mail::class
);
foreach ($con as $key => $value) {
    $container->instance($key, new $value);
}