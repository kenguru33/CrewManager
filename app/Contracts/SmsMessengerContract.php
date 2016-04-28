<?php
/**
 * Created by PhpStorm.
 * User: bernt
 * Date: 25.04.2016
 * Time: 23.35
 */
namespace App\Contracts;

interface SmsMessengerContract
{
    
    public function send(string $receiver, string $message);
    
}