<?php
include 'includes/funcoesImc.inc.php';

$peso = $_POST['peso'];
$altura = $_POST['altura'];
$imc = calcularImc($peso, $altura);
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado do IMC</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="card">
        <h1>Resultado</h1>

        <?php mostrarResultadoImc($imc); ?>

        <p>
            <a class="link" href="index.html">Calcular novamente</a>
        </p>
    </main>
</body>

</html>
