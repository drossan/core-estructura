<?php 
namespace GRDAR;

use Grdar\core\Model;
use Grdar\core\Pagination\PaginateTemplate;

class Test extends Model
{
    public function getTest()
    {
        return $this->setQuery("SELECT * FROM test")
            ->paginate(PaginateTemplate::class, null, '', 1)
            ->resultsetObject();
    }
}