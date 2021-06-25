<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1008 - Salário</title>
</head>
<body>
 <h2>Problema 1008 - Salário</h2>
 <p>Escreva um programa que leia o número de um funcionário, seu número de horas trabalhadas, o valor que recebe por hora e calcula o salário desse funcionário. 
 A seguir, mostre o número e o salário do funcionário, com duas casas decimais.</p></br>

<h2>Entrada</h2>
<p>O arquivo de entrada contém 2 números inteiros e 1 número com duas casas decimais, representando o número, quantidade de horas trabalhadas e o valor que o funcionário recebe por hora trabalhada, respectivamente.</p>

<h2>Saída</h2>
<p>Imprima o número e o salário do funcionário, conforme exemplo fornecido, com um espaço em branco antes e depois da igualdade. No caso do salário, também deve haver um espaço em branco após o $.</p>
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