<?php


namespace App\Exceptions;

class Core
    extends \Exception
{
    public function __construct($message)
    {
        $this->message = $message;
    }

}