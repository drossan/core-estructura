<?php
namespace GRDAR\Mail;

use Grdar\core\PHPMailer\PHPMailer;
use Grdar\core\PHPMailer\phpmailerException;

use stdClass;
use Exception;

class Mail extends PHPMailer {

    const HOST          = PHPMAILER_HOST;
    const SMTPAuth      = PHPMAILER_SMTPAUTH;
    const Username      = PHPMAILER_USERNAME;
    const Password      = PHPMAILER_PASSWORD;
    const SMTPSecure    = PHPMAILER_SMTPSECURE;
    const Port          = PHPMAILER_PORT;
    const CharSet       = PHPMAILER_CHARSET;
    const isHTML        = PHPMAILER_ISHTML;


    protected $subject;
    public $html;


    public function setTemplate($template, $datos)
    {
        parent::__construct(true);
        try {
            $this->IsSMTP();
            // $this->SMTPDebug = 1;
            $this->SMTPAuth = self::SMTPAuth;
            $this->SMTPSecure = self::SMTPSecure;
            $this->Host = self::HOST;

            $this->Port = self::Port;
            $this->CharSet = self::CharSet;
            $this->isHTML(self::isHTML);

            //Username to use for SMTP authentication
            $this->Username = self::Username;
			$this->Password = self::Password;

            $form =  new stdClass();
            is_array($datos) ? $datos = (object)$datos : false;

            foreach ($datos as $key => $value) {
                $form->$key = $value;
			}

            $class = new $template;
            
            $this->AltBody = '';
            $this->Body = $class::setbody($form);
            $this->Subject = 'Subject';
            $this->setFrom(EMAIL_FROM, 'Email From');
            $this->addAddress(EMAIL_TO);

            $send = $this->send();

            if($send){
                echo true;
            }else {
                echo false;
            }
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $this->ErrorInfo;
        }
    }
}
