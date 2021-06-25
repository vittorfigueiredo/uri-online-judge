<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1005 - Média 1</title>
</head>
<body>
 <h2>Problema 1005 - Média 1</h2>
 <p>Leia 2 valores de ponto flutuante de dupla precisão A e B, que correspondem a 2 notas de um aluno. 
 A seguir, calcule a média do aluno, sabendo que a nota A tem peso 3.5 e a nota B tem peso 7.5 (A soma dos pesos portanto é 11). Assuma que cada nota pode ir de 0 até 10.0, sempre com uma casa decimal.</p></br>

<h2>Entrada</h2>
<p>O arquivo de entrada contém 2 valores com uma casa decimal cada um.</p>

<h2>Saída</h2>
<p>Imprima a mensagem "MEDIA" e a média do aluno conforme exemplo abaixo, com 5 dígitos após o ponto decimal e com um espaço em branco antes e depois da igualdade. 
Utilize variáveis de dupla precisão (double) e como todos os problemas, não esqueça de imprimir o fim de linha após o resultado, caso contrário, você receberá "Presentation Error".</p>
</body>
</html>

<?php

$A = number_format(fgets(STDIN), 1);
$B = number_format(fgets(STDIN), 1);
$N = ($A * 3.5) + ($B * 7.5);
$P = 3.5 + 7.5;

$MEDIA = number_format((($N) /$P ), 5);

echo "MEDIA = $MEDIA\n";
?>