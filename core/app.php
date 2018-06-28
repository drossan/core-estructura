<?php

/*
    Autocarga de Facades && Container
*/


// Registro 

$app = array(
    'Router' => 'Rout',
    'View' => '',
    'Mail' => ''
);

foreach ($app as $key => $value) {
    // print_r($app);
    print_r('GRDAR'.DIRECTORY_SEPARATOR.'Facades'.DIRECTORY_SEPARATOR.$key, $value ? $value : $key);
}


// foreach ($app as $key => $value) {
//     class_alias('GRDAR\Facades\Router', 'Rout');
// }

// class_alias('GRDAR\Facades\Router', 'Rout');
// class_alias('GRDAR\Facades\View', 'View');
// class_alias('GRDAR\Facades\Mail', 'Mail');