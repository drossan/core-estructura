<?php
    ob_start();

    session_status() != PHP_SESSION_NONE ?? session_start();

    require_once __DIR__.'/core/init.php';

    $routerContainer = new Aura\Router\RouterContainer();
    $map = $routerContainer->getMap();

    Rout::get('index', '/', 'Index', 'index');
    Rout::get('pagina', '/pagina/{pagina}', 'Index', 'index');

    Rout::run();

    ob_end_flush();