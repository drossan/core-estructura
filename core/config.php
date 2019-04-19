<?php 
namespace GRDAR;

use Drossan\core\Routes\Router,
    Drossan\core\Database\Connection;

return [
    'Controllers' =>  [
        'Index'  => Controllers\IndexController::class
    ],
    'Facades' => [
        'Rout'  => 'Router',
        'MailFacade'  => 'Mail',
        'Connection' => 'db'
    ],
    'Instances' => [
        'Rout'  => Router::class,
        'Mail'  => Mail\Mail::class,
        'Connection' => Connection::class
    ]
];