<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 1006 - Média 2</title>
</head>
<body>
 <h2>Problema 1006 - Média 2</h2>
 <p>Leia 3 valores, no caso, variáveis A, B e C, que são as três notas de um aluno. A seguir, calcule a média do aluno, sabendo que a nota A tem peso 2, a nota B tem peso 3 e a nota C tem peso 5. Considere que cada nota pode ir de 0 até 10.0, sempre com uma casa decimal.</p></br>

<h2>Entrada</h2>
<p>O arquivo de entrada contém 3 valores com uma casa decimal, de dupla precisão (double).</p>

<h2>Saída</h2>
<p>Imprima a mensagem "MEDIA" e a média do aluno conforme exemplo abaixo, com 1 dígito após o ponto decimal e com um espaço em branco antes e depois da igualdade. 
Assim como todos os problemas, não esqueça de imprimir o fim de linha após o resultado, caso contrário, você receberá "Presentation Error".</p>
</body>
</html>

<?php

$A = number_format(fgets(STDIN), 1);
$B = number_format(fgets(STDIN), 1);
$C = number_format(fgets(STDIN), 1);
$N = ($A * 2) + ($B * 3) + ($C * 5);
$P = 2 + 3 + 5;

$MEDIA = number_format((($N) /$P ), 1);

echo "MEDIA = $MEDIA\n";

?>
