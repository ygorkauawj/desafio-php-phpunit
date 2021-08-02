<?php

namespace ygorkauawj\Desafiophpunit\Exceptions;

use DomainException;

class DivisaoPorZeroException extends DomainException
{
    public function __construct()
    {
        $message ='Você não pode dividir um numero negativo, tente novamente.';
        parent::__construct($message);
    }
}