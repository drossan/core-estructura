<?php 
namespace GRDAR;

use Drossan\core\Routes\Router;

return [
    'Controllers' =>  [
        'Index'  => Controllers\IndexController::class
    ],
    'Facades' => [
        'Rout'  => 'Router',
        'MailFacade'  => 'Mail'
    ],
    'Instances' => [
        'Rout'  => Router::class,
        'Mail'  => Mail\Mail::class
    ]
];