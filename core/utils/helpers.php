<?php 
    require_once __DIR__.'/../init.php';

    // Comprueba si estamos en alguna página de la paginación
    if (! function_exists('paginate')) {
        function paginate(){           
            if(isset($_REQUEST['pagina'])){
                return $_REQUEST['pagina'];
            }
            return 1;
        }
    }

    // Comprueba si hay que hacer consulta con algún order
    if (! function_exists('sorteable')) {
        function sorteable($class){
            if(isset($_REQUEST['field']) && isset($_REQUEST['order'])){
                return $class::setOrder($_REQUEST['field'], $_REQUEST['order']);
            }
        }
    }

    // Comprueba si hay que hacer consulta con algún order
    if (! function_exists('limit_paginate')) {
        function limit_paginate($class){
            if(isset($_REQUEST['limit'])){
                return $container->make($class)->setLimit($_REQUEST['limit']);
            }
        }
    }

    // Devuelve formato fecha: dd mm YYYY -> ej: 02 octubre 2017
    if (! function_exists('_date3')) {
        function _date3($date){
            $mes    =  array(
                '01' => 'Enero', 
                '02' => 'Febrero', 
                '03' => 'Marzo', 
                '04' => 'Abril', 
                '05' => 'Mayo', 
                '06' => 'Junio', 
                '07' => 'Julio', 
                '08' => 'Agosto', 
                '09' => 'Septiembre', 
                '10' => 'Octubre', 
                '11' => 'Noviembre', 
                '12' => 'Diciembre'
            );
            $date = explode('-', $date);
            return $date[2].' '.$mes[$date[1]].' '.$date[0];
        }
    }


    // Comprueba si hay que hacer consulta con algún order
    if (! function_exists('idioma')) {
        function idioma(){
            $url_actual = $_SERVER["REQUEST_URI"];
            $url_page = explode('/', $url_actual);
            $idiomas = explode('/', IDIOMAS);
            if(!in_array($url_page[1], $idiomas)) {
                $url_page[1] = 'es';
            }
            return isset($url_page[1]) ? $idioma = $url_page[1] : $idioma = 'es' ;
        }
    }
    // Comprueba si hay que hacer consulta con algún order
    if (! function_exists('idiomaTraduccion')) {
        function idiomaTraduccion(){
            $a = Lang::get(idioma(), 2);
            return $a == false ? 0 : $a->id;
        }
    }

    if (! function_exists('pageUrl')) {
        function pageUrl(){
            $url = explode('/', $_SERVER['REQUEST_URI']);
            return isset($url[2]) ? false : true;
        }
    }

    if (! function_exists('pageCurrentUrl')) {
        function pageCurrentUrl(){
            $url = explode('/', $_SERVER['REQUEST_URI']);
            unset($url[0]);
            unset($url[1]);

            return $url;
        }
    }


    if (! function_exists('isIndex')) {
        function isIndex(){
            return $_REQUEST['page'] != 'index' ? false : true;
        }
    }




    if (! function_exists('check_user_agent')) {
        function check_user_agent ( $type = NULL ) {
            $user_agent = strtolower ( $_SERVER['HTTP_USER_AGENT'] );
            if ( $type == 'bot' ) {
                    // matches popular bots
                    if ( preg_match ( "/googlebot|adsbot|yahooseeker|yahoobot|msnbot|watchmouse|pingdom\.com|feedfetcher-google/", $user_agent ) ) {
                            return true;
                            // watchmouse|pingdom\.com are "uptime services"
                    }
            } else if ( $type == 'browser' ) {
                    // matches core browser types
                    if ( preg_match ( "/mozilla\/|opera\//", $user_agent ) ) {
                            return true;
                    }
            } else if ( $type == 'mobile' ) {
                    // matches popular mobile devices that have small screens and/or touch inputs
                    // mobile devices have regional trends; some of these will have varying popularity in Europe, Asia, and America
                    // detailed demographics are unknown, and South America, the Pacific Islands, and Africa trends might not be represented, here
                    if ( preg_match ( "/phone|iphone|itouch|ipod|symbian|android|htc_|htc-|palmos|blackberry|opera mini|iemobile|windows ce|nokia|fennec|hiptop|kindle|mot |mot-|webos\/|samsung|sonyericsson|^sie-|nintendo/", $user_agent ) ) {
                            // these are the most common
                            return true;
                    } else if ( preg_match ( "/mobile|pda;|avantgo|eudoraweb|minimo|netfront|brew|teleca|lg;|lge |wap;| wap /", $user_agent ) ) {
                            // these are less common, and might not be worth checking
                            return true;
                    }
            }
            return false;
        }
    }