<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1007 - Diferença</title>
</head>
<body>
 <h2>Problema 1007 - Diferença</h2>
 <p>Leia quatro valores inteiros A, B, C e D. A seguir, calcule e mostre a diferença do produto de A e B pelo produto de C e D segundo a fórmula: DIFERENCA = (A * B - C * D).</p></br>

<h2>Entrada</h2>
<p>O arquivo de entrada contém 4 valores inteiros.</p>

<h2>Saída</h2>
<p>Imprima a mensagem DIFERENCA com todas as letras maiúsculas, conforme exemplo abaixo, com um espaço em branco antes e depois da igualdade.</p>
</body>
</html>

<?php

$NUMBER = fgets(STDIN);
$hourWorked = fgets(STDIN);
$valuePerHour = fgets(STDIN);

$SALARY = number_format($hourWorked * $valuePerHour, 2, ".", "");

echo "NUMBER = $NUMBER";
echo "SALARY = U$ $SALARY\n";
echo "DIFERENCA = $DIFERENCA\n";

?>