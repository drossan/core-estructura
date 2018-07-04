<?php 
namespace GRDAR;

use Grdar\core\Model;

class Test extends Model
{
    public function getTest()
    {
        return $this->setQuery("SELECT * FROM test")->resultsetObject();
         
    }
}
