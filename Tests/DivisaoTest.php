<?php

namespace ygorkauawj\Tests;

use PHPUnit\Framework\TestCase;
use ygorkauawj\Desafiophpunit\Exceptions\NegativeNumberException;
use ygorkauawj\Desafiophpunit\Models\Divisao;

class DivisaoTest extends TestCase
{
    /**
     * @dataProvider valoresPadroes
     */
    public function testDivisaoComNumeroPadrao(float $num1, float $num2)
    {
        $dvs = new Divisao();
        $result = $dvs->divisao($num1, $num2);
        self::assertEquals(2, $result);
    }

    /**
     * @dataProvider valoresPadroes
     */
    public function testDivisaoComNumeroPadraoAoContrario(float $num1, float $num2)
    {
        $dvs = new Divisao();
        $result = $dvs->divisao($num2, $num1);
        self::assertEquals(0.5, $result);
    }

    public function testPrimeiroNumeroNegativo()
    {
        $this->expectException(NegativeNumberException::class);     
        $this->expectExceptionMessage('Você não pode inserir um numero negativo, tente novamente.');   
        $num1 = -10;
        $num2 = 2;

        $dvs = new Divisao();
        $dvs->divisao($num1, $num2);
    }

    public function testSegundoNumeroNegativo()
    {
        $this->expectException(NegativeNumberException::class);
        $this->expectExceptionMessage('Você não pode inserir um numero negativo, tente novamente.');

        $num1 = 10;
        $num2 = -2;

        $dvs = new Divisao();
        $dvs->divisao($num1, $num2);
    }

    public function valoresPadroes()
    {
        $num1 = 10;
        $num2 = 5;

        return [
            [$num1, $num2]
        ];
    }
}