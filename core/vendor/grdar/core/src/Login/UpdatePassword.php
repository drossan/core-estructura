<?php 

namespace  Grdar\core\Login;
use  Grdar\core\Model;
use  Grdar\core\Datos;

class UpdatePassword extends Model
{
    public $user;
    public $pass;
    public $newpass;
    public $conpass;
    public $return;

    const TABLE = TABLE;
    const FIELD_USER = FIELD_USER;
    const FIELD_PASS = FIELD_USER;

    public function __construct($pass, $newpass, $conpass)
    {
        $this->user = $_SESSION['user'];
        $this->pass = $pass;
        $this->newpass = $newpass;
        $this->conpass = $conpass;

        return $this->checkPassword() === true ? $this->checkNewPassword() :  $this->return = 'ERROR: La contraseña es incorrecta!' ;
    }

    public function getChange()
    {
        return $this->return;
    }

    private function checkPassword()
    {
        $query = "SELECT ".self::FIELD_PASS." FROM ".self::TABLE." where ".self::FIELD_PASS." = '$this->pass' WHERE id = $this->user";
        $this->setQuery($query);
        $this->getQuery();
        $pwd = $this->singleObject();

        $secret_passwd = self::FIELD_PASS;

        return $this->pass === $pwd->$secret_passwd ? true : false;
    }

    private function checkNewPassword()
    {
        return $this->newpass === $this->conpass ? $this->updatePwd() :  $this->return = 'ERROR: Las contraseñas no coinciden!';
    }

    private function updatePwd()
    {            
        $query = "UPDATE ".self::TABLE." SET ".self::FIELD_PASS."= '$this->newpass' WHERE id = $this->user";
        $this->setQuery($query);
        $this->getQuery();
        $this->return = $this->rowCount();
    }
}