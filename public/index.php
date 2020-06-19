<?php
   /* ob_start();

    session_status() != PHP_SESSION_NONE ?? session_start();

    require_once __DIR__.'/../core/init.php';


    Rout::get('index', '/', 'Index', 'index');
    Rout::get('newUser', '/new', 'Index', 'newUser');
    Rout::post('addUser', '/add', 'index', 'addUser');
    Rout::get('getUser', '/edit/{user}', 'index', 'editUser');
    Rout::post('editUser', '/edit', 'index', 'editUser');

    Rout::attach('Admin', '/home', [
        ['get', 'index', '/dashboard', 'Index', 'indexTest'],
    ], ['auth' => true]);

    Rout::run();

    ob_end_flush(); */

print_r($_REQUEST);