<?php 

namespace GRDAR\Controllers;
use Grdar\core\Facades\View;
use Grdar\core\Routes\Router;

class IndexController
{
    public static function index()
    {
        $_REQUEST['page'] = 'index';
        return View::view('index');
    }
}
