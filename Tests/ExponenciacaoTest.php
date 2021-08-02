<?php

namespace ygorkauawj\Tests;

use PHPUnit\Framework\TestCase;
use ygorkauawj\Desafiophpunit\Exceptions\NegativeNumberException;
use ygorkauawj\Desafiophpunit\Models\Exponenciacao;

class ExponenciacaoTest extends TestCase
{
    /**
     * @dataProvider valoresPadrao
     */
    public function testExponenciacaoComNumeroPadrao(float $num1, float $num2)
    {
        $expo = new Exponenciacao();
        $result = $expo->exponenciacao($num1, $num2);
        $this->assertEquals(100000, $result);
    }
    public function testPrimeiroNumeroNegativo()
    {
        $this->expectException(NegativeNumberException::class);
        $this->expectExceptionMessage('Você não pode inserir um numero negativo, tente novamente.');

        $num1 = -10;
        $num2 = 2;

        $expo = new Exponenciacao();
        $expo->exponenciacao($num1, $num2);

    }

    public function testSegundoNumeroNegativo()
    {
        $this->expectException(NegativeNumberException::class);
        $this->expectExceptionMessage('Você não pode inserir um numero negativo, tente novamente.');

        $num1 = 10;
        $num2 = -2;

        $expo = new Exponenciacao();
        $expo->exponenciacao($num1, $num2);

    }

    public function valoresPadrao()
    {
        $num1 = 10;
        $num2 = 5;

        return [
            $num1,
            $num2
        ];
    }
}