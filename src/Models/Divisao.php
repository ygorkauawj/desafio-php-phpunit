<?php

namespace ygorkauawj\Desafiophpunit\Models;

use ygorkauawj\Desafiophpunit\Exceptions\DivisaoPorZeroException;
use ygorkauawj\Desafiophpunit\Exceptions\NegativeNumberException;

class Divisao
{
    public function divisao(float $num1, float $num2): float
    {
        if ($num1 < 0 || $num2 < 0) {
            throw new NegativeNumberException;
        }
        if ($num1 == 0 || $num2 == 0) {
            throw new DivisaoPorZeroException;
        }
        $result = $num1 / $num2;
        return $result;
    }
}