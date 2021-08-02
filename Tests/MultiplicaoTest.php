<?php

namespace ygorkauawj\Tests;

use PHPUnit\Framework\TestCase;
use ygorkauawj\Desafiophpunit\Exceptions\NegativeNumberException;
use ygorkauawj\Desafiophpunit\Models\Multiplicacao;

class MultiplicacaoTest extends TestCase
{
    public function testPrimeiroNumeroNegativo()
    {
        $this->expectException(NegativeNumberException::class);
        $this->expectExceptionMessage('Você não pode inserir um numero negativo, tente novamente.');

        $num1 = -10;
        $num2 = 2;

        $multi = new Multiplicacao();
        $multi->multiplicacao($num1, $num2);

    }

    public function testSegundoNumeroNegativo()
    {
        $this->expectException(NegativeNumberException::class);
        $this->expectExceptionMessage('Você não pode inserir um numero negativo, tente novamente.');

        $num1 = 10;
        $num2 = -2;

        $multi = new Multiplicacao();
        $multi->multiplicacao($num1, $num2);

    }
}