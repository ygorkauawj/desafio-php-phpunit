<?php

use ygorkauawj\Desafiophpunit\Exceptions\DivisaoPorZeroException;
use ygorkauawj\Desafiophpunit\Models\Divisao;

require_once 'vendor/autoload.php';

$exc = new Divisao();
try {
    $exc->divisao(10, 0);
} catch (DivisaoPorZeroException $exception) {
    echo $exception->getMessage();
}

