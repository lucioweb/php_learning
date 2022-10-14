<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo5_6</title>
</head>
<body>
<?php 
/*
Exemplo de uso da estrutura de repetição com "do ... while". 
O comando avalia a condição dentro do while no final do laço. 
Enquanto a expressão retornar o valor "true" o bloco de código dentro das chaves será executado.
Quando a expressão retornar o valor "false", encerra-se o laço de repetição e o programa segue seu fluxo normal.
Como a condição dentro do while é testada no final, 
se a expressão testada retornar "false" haverá pelo menos uma execução do laço.
Devemos ter o cuidado de nunca colocarmos no while expressões que nunca retornarão "false", se 
não teremos um loop perpétuo ou infinito. 
*/
$cont=11;
do{
	echo "$cont <br>";//A tag <br> antes da variável ser incrementada garante a quebra de linha.
	$cont++;
  } while ($cont<10) //Significa: enquanto a variável $cont for menor que 100, imprima o valor da variável na saída e incremente $cont.

?>
</body>
</html>