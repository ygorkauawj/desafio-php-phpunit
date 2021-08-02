<?php

namespace ygorkauawj\Tests;

use PHPUnit\Framework\TestCase;
use ygorkauawj\Desafiophpunit\Exceptions\NegativeNumberException;
use ygorkauawj\Desafiophpunit\Models\Subtracao;

class SubtracaoTest extends TestCase
{
    /**
     * @dataProvider valoresPadroes
     */
    public function testSubtracaoComNumeroPadrao(float $num1, float $num2)
    {
        $sub = new Subtracao();
        $result = $sub->subtracao($num1, $num2);
        self::assertEquals(5, $result);
    }

    /**
     * @dataProvider valoresPadroes
     */
    public function testSubtracaoComNumeroPadraoAoContrario(float $num1, float $num2)
    {
        $sub = new Subtracao();
        $result = $sub->subtracao($num2, $num1);
        self::assertEquals(-5, $result);
    }

    public function testPrimeiroNumeroNegativo()
    {
        $this->expectException(NegativeNumberException::class);
        $this->expectExceptionMessage('Você não pode inserir um numero negativo, tente novamente.');

        $num1 = -10;
        $num2 = 2;

        $sub = new Subtracao();
        $sub->subtracao($num1, $num2);
    }

    public function testSegundoNumeroNegativo()
    {
        $this->expectException(NegativeNumberException::class);
        $this->expectExceptionMessage('Você não pode inserir um numero negativo, tente novamente.');

        $num1 = 10;
        $num2 = -2;

        $sub = new Subtracao();
        $sub->subtracao($num1, $num2);
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