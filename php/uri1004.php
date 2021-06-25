<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1004 - Produto Simples</title>
</head>
<body>
 <h2>Problema 1004 - Produto Simples</h2>
 <p>Leia dois valores inteiros. A seguir, calcule o produto entre estes dois valores e atribua esta operação à variável PROD. A seguir mostre a variável PROD com mensagem correspondente.</p></br>

<h2>Entrada</h2>
<p>O arquivo de entrada contém 2 valores inteiros.</p>

<h2>Saída</h2>
<p>Imprima a mensagem "PROD" e a variável PROD conforme exemplo abaixo, com um espaço em branco antes e depois da igualdade. 
Não esqueça de imprimir o fim de linha após o produto, caso contrário seu programa apresentará a mensagem: “Presentation Error”.</p>
</body>
</html>

<?php

$valor1 = fgets(STDIN);
$valor2 = fgets(STDIN);

$PROD = $valor1 * $valor2;

echo "PROD = $PROD";
?>
