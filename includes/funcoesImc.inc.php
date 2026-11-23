<?php

function calcularImc($peso, $altura)
{
    $alturaAoQuadrado = $altura * $altura;
    $imc = $peso / $alturaAoQuadrado;

    return $imc;
}

function mostrarResultadoImc($imc)
{
    if ($imc < 18.5) {
        $resultado = 'Abaixo do peso';
    } elseif ($imc < 25) {
        $resultado = 'Peso normal';
    } elseif ($imc < 30) {
        $resultado = 'Sobrepeso';
    } elseif ($imc < 35) {
        $resultado = 'Obesidade grau 1';
    } elseif ($imc < 40) {
        $resultado = 'Obesidade grau 2';
    } else {
        $resultado = 'Obesidade grau 3';
    }

    echo '<p><strong>IMC:</strong> ' . number_format($imc, 2, ',', '.') . '</p>';
    echo '<p><strong>Resultado:</strong> ' . $resultado . '</p>';
}
