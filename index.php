<?php
	ob_start();
	session_status() === PHP_SESSION_NONE ? session_start() : false;

	require_once __DIR__.'/core/init.php';

	Rout::setRequest($_SERVER['REQUEST_URI']);
	Rout::add('/', 'Index::index');
	Rout::add('/home', 'Index::index');
	Rout::add('/pagina/:pagina', 'Index::index');

	Rout::run();

	ob_end_flush();
