<?php

namespace  Grdar\core\Login;

use  Grdar\core\Model;

class Authenticator extends Model{
	public $user;
	public $pass;
    public $return;
    
    const TABLE = TABLE;
    const FIELD_USER = FIELD_USER;
    const FIELD_PASS = FIELD_USER;

    public function __construct($user, $pass)
    {
	    $this->user = $user;
	    $this->pass = md5($pass);
	    $this->connect();
    }

    public function getConnect()
    {
        return $this->return;
    }

    public function connect(){
        $query = "SELECT id from ".self::TABLE." WHERE ".self::FIELD_USER." = '$this->user' AND ".self::FIELD_PASS." = '$this->pass'";
        $this->setQuery($query);
        $this->getQuery();
        $this->isUser($this->rowCount());
    }

    protected function isUser($user){
        if($user == 1){
            $login = $this->singleObject();

            $user = self::FIELD_USER;

            $this->user = $login->$user;

            $token = new Token;

            $_SESSION['user'] = $login->id;
            $_SESSION['token'] = $token->token;
            $this->return = 'success';
        }
    }
}




