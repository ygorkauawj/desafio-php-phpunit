<?php

namespace ygorkauawj\Desafiophpunit\Exceptions;

use DomainException;

class NegativeNumberException extends DomainException
{
    public function __construct()
    {
        $message ='Você não pode inserir um numero negativo, tente novamente.';
        parent::__construct($message);
    }
}