<?php 
namespace GRDAR\Controllers;

use TestFacade;
use Grdar\core\Views\View;

class IndexController extends View
{
    public function index()
    {
        TestFacade::getTest();
        return $this->renderHTML('index.twig', [
            'paginate' => TestFacade::getPaginate()
        ]);
    }
}
