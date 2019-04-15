<?php 
namespace GRDAR;

return [
    'Controllers' =>  [
        'Index'  => Controllers\IndexController::class
    ],
    'Facades' => [
        'Rout'  => 'Router',
        'MailFacade'  => 'Mail',
        'Test'  => 'TestFacade'
    ],
    'Instances' => [
        'Rout'  => \Grdar\core\Routes\Router::class,
        'Mail'  => Mail\Mail::class,
        'Test'  => Test::class,
    ]
];