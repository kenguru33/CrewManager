<?php
/**
 * Created by PhpStorm.
 * User: bernt
 * Date: 25.04.2016
 * Time: 23.31
 */

namespace App;

use App\Contracts\SmsMessengerContract;
use Config;
use Illuminate\Support\Facades\App;

class PsWinComSmsMessenger implements SmsMessengerContract
{
    
    /**
     * @var string
     */
    private $username;
    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $sender;
    
    public function __construct(string $sender, string $username, string $password)
    {
        
        /*$this->sender = 'CrewOnly-dev';
        $this->username = 'rnssr';
        $this->password = 'kdfjur';*/

        $this->sender = $sender;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @param string $receiver
     * @param string $message
     * @throws Exception
     */
    public function send(string $receiver, string $message) 
    {
        echo "Sending SMS";
        $url = "http://sms.pswin.com/http4sms/send.asp";
        $data = "USER=".$this->username ."&PW=".$this->password ."&SD=CrewOnly&SND=" .$this->sender . "&RCV=47" . $receiver . "&TXT=" . $message;
        $params = array('http' => array(
            'method' => 'POST',
            'header'=> "Content-type: application/x-www-form-urlencoded\r\n" . "Content-Length: " . strlen($data) . "\r\n",
            'content' => $data
        ));

        $ctx = stream_context_create($params);
        $fp = @fopen($url, 'rb', false, $ctx);
        if (!$fp)
            throw new Exception("Problem with $url, $php_errormsg");
        $response = @stream_get_contents($fp);

        if ($response === false)
            throw new Exception("Problem reading data from $url, $php_errormsg");
        echo $response;
    }
}