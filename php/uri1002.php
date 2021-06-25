<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1002 - Área do Circulo</title>
</head>
<body>
 <h2>Problema 1002 - Área do Circulo</h2>
 <p>A fórmula para calcular a área de uma circunferência é: area = π . raio2. Considerando para este problema que π = 3.14159:</br>
- Efetue o cálculo da área, elevando o valor de raio ao quadrado e multiplicando por π.</p>

<h2>Entrada</h2>
<p>A entrada contém um valor de ponto flutuante (dupla precisão), no caso, a variável raio.</p>

<h2>Saída</h2>
<p>Apresentar a mensagem "A=" seguido pelo valor da variável area, conforme exemplo abaixo, com 4 casas após o ponto decimal.</br>
Utilize variáveis de dupla precisão (double). Como todos os problemas, não esqueça de imprimir o fim de linha após o resultado, caso contrário, você receberá "Presentation Error".</p>
</body>
</html>

<?php

$raio = fgets(STDIN);
$pi = 3.14159;

$area = number_format($pi*($raio ** 2), 4, '.', '');

echo "A=".$area."\n";

?>