<?php 

namespace GRDAR\Controllers;
use Grdar\core\Views\View;

class IndexController
{
    public static function index($pagina = null)
    {
        $_GET['page'] = 'index';
        $_GET['pagina'] = $pagina;
        return View::view('index');
    }
}
