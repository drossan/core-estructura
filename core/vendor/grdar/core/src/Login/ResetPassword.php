<?php 

namespace  Grdar\core\Login;
use  Grdar\core\Model;

class ResetPassword extends Model
{
    private $user;
	private $token;
    private $return;

    const TABLE = TABLE;

    public function __construct($user, $token)
    {
        $this->user = $user;
        $this->token = $token;
        $this->checkRecovery();
    }

    public function getRecovery()
    {
        return $this->return;
    }

    private function checkRecovery()
    {
        $query = "SELECT id from ".self::TABLE." WHERE id = '$this->user' AND tokken = '$this->token'";
        $this->setQuery($query);
        $this->getQuery();
        $this->return = $this->rowCount();
    }
}
