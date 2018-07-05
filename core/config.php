<?php 
namespace GRDAR;

return [
    'Controllers' =>  [
        'Index'  => Controllers\IndexController::class
    ],
    'Facades' => [
        'Rout'  => 'Router',
        'MailFacade'  => 'Mail',
        'TestFacade'  => 'Test'
    ],
    'Instances' => [
        'Rout'  => \Grdar\core\Routes\Router::class,
        'Mail'  => Mail\Mail::class,
        'TestFacade'  => Test::class,
    ]
];