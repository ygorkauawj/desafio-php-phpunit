<?php

namespace ygorkauawj\Desafiophpunit\Models;
use ygorkauawj\Desafiophpunit\Exceptions\NegativeNumberException;

class Subtracao
{
    public function subtracao(float $num1, float $num2): float
    {
        if ($num1 <= 0 || $num2 <= 0) {
            throw new NegativeNumberException;
        }
        $result = $num1 - $num2;
        return $result;
    }
}