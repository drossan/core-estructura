<?php
    ob_start();
    session_start();

    require_once __DIR__.'/core/init.php';

    Rout::setRequest($_SERVER['REQUEST_URI']);
    
	Rout::add('/', 'Index::index');
	
  	Rout::run();