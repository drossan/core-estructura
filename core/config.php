<?php 
namespace GRDAR;

return [
    'Controllers' =>  [
        'Index'  => Controllers\IndexController::class
    ],
    'Facades' => [
        'Rout'  => 'Router',
        'ViewFacade'  => 'View',
        'MailFacade'  => 'Mail',
        'TestFacade'  => 'Test'
    ],
    'Instances' => [
        'Rout'  => \Grdar\core\Routes\Router::class,
        'View'  => \Grdar\core\Views\View::class,
        'Mail'  => Mail\Mail::class,
        'TestFacade'  => Test::class,
    ]
];