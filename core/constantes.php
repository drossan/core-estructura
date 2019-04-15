<?php 
define("ENV",  'development');

// Configuración base de datos
define("DB_HOST",  'localhost');
define("DB_DATABASE",  'test');
define("DB_USERNAME",  'root');
define("DB_PASSWORD",  '');

// Url base
define("BASE_URL",  'http://core-estructura.test');

// Hash para assets
define("HASH",  '');

// Paginación
define("ROWSPERPAGE",  '6');
define("CHANGELIMIT",  'false');
define("ROWSPERPAGE_OPTION", '');
define('PAGE',  '/pagina/');
define('LIMIT',  '/limit/');

// Carpateas de includes y vistas
define('PATH_INCLUDES',  'inc/');
define('PATH_VIEWS',  'views/');

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

// GOOGLE
define('CAPTCHA', '6LdQDTUUAAAAAKKAKnU3lsC93rbB87xVEO219sDG');
define('CAPTCHA_SECRET', '6LdQDTUUAAAAAKUuxGL0RVpPfdn36kd5hz2DPL6_');

define('KEY_MAP_GOOGLE', 'AIzaSyAAOfEjPGoUxU7EZFysckWeYIxVCdwphoo');

define('GOOGLE_AUTHOR', 'https://plus.google.com/u/0/103518895996174105658');
define('GOOGLE_PUBLISHER', 'https://plus.google.com/u/0/103518895996174105658');


// Caché twig
define('PATH_CACHE', false);