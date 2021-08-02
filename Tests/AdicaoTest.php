<?php

namespace ygorkauawj\Tests;

use PHPUnit\Framework\TestCase;
use ygorkauawj\Desafiophpunit\Exceptions\NegativeNumberException;
use ygorkauawj\Desafiophpunit\Models\Adicao;

class AdicaoTest extends TestCase
{
    /**
     * @dataProvider valoresPadroes
     */
    public function testAdicaoComNumeroPadrao(float $num1, float $num2)
    {
        $adc = new Adicao();
        $result = $adc->Adicao($num1, $num2);
        self::assertEquals(15, $result);
    }

    /**
     * @dataProvider valoresPadroes
     */
    public function testAdicaoComNumeroPadraoAoContrario(float $num1, float $num2)
    {
        $adc = new Adicao();
        $result = $adc->Adicao($num2, $num1);
        self::assertEquals(15, $result);
    }

    public function testPrimeiroNumeroNegativo()
    {
        $this->expectException(NegativeNumberException::class);
        $this->expectExceptionMessage('Você não pode inserir um numero negativo, tente novamente.');

        $num1 = -10;
        $num2 = 2;

        $adc = new Adicao();
        $adc->adicao($num1, $num2);
    }

    public function testSegundoNumeroNegativo()
    {
        $this->expectException(NegativeNumberException::class);
        $this->expectExceptionMessage('Você não pode inserir um numero negativo, tente novamente.');

        $num1 = 10;
        $num2 = -2;

        $adc = new Adicao();
        $adc->adicao($num1, $num2);
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