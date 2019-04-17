<?php 
namespace GRDAR\Controllers;

use Drossan\core\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return $this->renderHTML('index.twig');
    }
}
