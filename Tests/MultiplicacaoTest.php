<?php

namespace ygorkauawj\Tests;

use PHPUnit\Framework\TestCase;
use ygorkauawj\Desafiophpunit\Models\Multiplicacao;

class MultiplicacaoTest extends TestCase
{
    /**
     * @dataProvider valoresPadroes
     */
    public function testMultiplicacaoComNumeroPadrao(float $num1, float $num2)
    {
        $multi = new Multiplicacao();
        $result = $multi->multiplicacao($num1, $num2);
        self::assertEquals(50, $result);
    }

    /**
     * @dataProvider valoresPadroes
     */
    public function testMultiplicacaoComNumeroPadraoAoContrario(float $num1, float $num2)
    {
        $multi = new Multiplicacao();
        $result = $multi->multiplicacao($num2, $num1);
        self::assertEquals(50, $result);
    }

    /**
     * @dataProvider valoresPadroesPrimeiroNegativo
     */
    public function testPrimeiroNumeroNegativo(float $num1, float $num2)
    {
        $multi = new Multiplicacao();
        $result = $multi->multiplicacao($num1, $num2);
        self::assertEquals(-50, $result);
    }

    /**
     * @dataProvider valoresPadroesPrimeiroNegativo
     */
    public function testSegundoNumeroNegativo(float $num1, float $num2)
    {
        $multi = new Multiplicacao();
        $result = $multi->multiplicacao($num2, $num1);
        self::assertEquals(-50, $result);
    }

    public function valoresPadroes()
    {
        $num1 = 10;
        $num2 = 5;

        return [
            [$num1, $num2]
        ];
    }

    public function valoresPadroesPrimeiroNegativo()
    {
        $num1 = -10;
        $num2 = 5;

        return [
            [$num1, $num2]
        ];
    }
}