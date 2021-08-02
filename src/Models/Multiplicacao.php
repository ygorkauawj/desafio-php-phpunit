<?php

namespace ygorkauawj\Desafiophpunit\Models;

class Multiplicacao
{
    public function multiplicacao(float $num1, float $num2):float
    {
        $result = $num1 * $num2;
        return $result;
    }
}