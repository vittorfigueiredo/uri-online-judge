<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1002 - Soma Simples</title>
</head>
<body>
 <h2>Problema 1003 - Soma Simples</h2>
 <p>
Leia dois valores inteiros, no caso para variáveis A e B. A seguir, calcule a soma entre elas e atribua à variável SOMA. A seguir escrever o valor desta variável.</p></br>

<h2>Entrada</h2>
<p>O arquivo de entrada contém 2 valores inteiros.</p>

<h2>Saída</h2>
<p>Imprima a mensagem "SOMA" com todas as letras maiúsculas, com um espaço em branco antes e depois da igualdade seguido pelo valor correspondente à soma de A e B.
 Como todos os problemas, não esqueça de imprimir o fim de linha após o resultado, caso contrário, você receberá "Presentation Error".</p>
</body>
</html>

<?php

$A = fgets(STDIN);
$B = fgets(STDIN);

$SOMA = $A + $B;

echo "SOMA = $SOMA\n";

?>
