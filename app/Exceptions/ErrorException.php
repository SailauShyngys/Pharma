<?php

namespace App\Exceptions;

use Exception;

class ErrorException extends Exception
{
    public function render(){
        return'Что-то пошло не так';
    }
    //
}
