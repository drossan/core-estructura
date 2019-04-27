<?php 
define("ENV",  'development');

// Configuración base de datos
define("DB_HOST",  'localhost');
define("DB_DATABASE",  'test');
define("DB_USERNAME",  'homestead');
define("DB_PASSWORD",  'secret');

// Url base
define("BASE_URL",  'http://core.test');

// Hash para assets
define("HASH",  '');

// Paginación
define("ROWSPERPAGE",  '6');
define("CHANGELIMIT",  'false');
define("ROWSPERPAGE_OPTION", '');
define('PAGE',  '/pagina/');
define('LIMIT',  '/limit/');

// Carpateas de includes y vistas
define('ROOT_PATH',  __DIR__ . '/../');
define('PATH_VIEWS',  __DIR__ . '/../views');

// Idiomas de la app
define('IDIOMAS', 'es/en');

// PHPMAILER
define('PHPMAILER_HOST', 'host');
define('PHPMAILER_SMTPAUTH', 'true');

//email envio / pass
define('PHPMAILER_USERNAME', 'test@test.com');
define('PHPMAILER_PASSWORD', 'pass');
define('PHPMAILER_SMTPSECURE', 'tls');
define('PHPMAILER_PORT', 587);
define('PHPMAILER_CHARSET', 'UTF-8');

//mail envio // mail donde se recibira respuesta
define('PHPMAILER_SETFROM', '');
define('PHPMAILER_ADDTOREPLY', '');
define('PHPMAILER_ISHTML', true);

define('EMAIL_FROM', 'test@test.com');
define('EMAIL_TO', 'test@test.com');


// Caché twig
define('PATH_CACHE', false);