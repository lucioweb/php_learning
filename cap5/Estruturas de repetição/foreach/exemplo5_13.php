<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo5_13</title>
</head>
<body>
<?php 
/*
Explorando o uso do "continue" dentro de comandos de repetição.
O comando "continue" é utilizado dentro das estruturas de repetição para ignorar o restante das instruções
pertencentes ao laço corrente e ir para próxima iteração (volta ao início do laço). 
Esse  programa percorre todos os elementos do vetor. 
Se o elemento $i do vetor $vetor módulo 2 ($vetor[$i] % 2 != 0), for diferente de zero, em outras palavras, 
se $i for ímpar, a execução é interrompida e o programa vai para a próxima iteração.
É criada uma variável $num_par para armazenar os valores de $i acessados.
Desse modo, apenas os valores pares serão exibidos na saída do programa. 
*/
$vetor = array(1, 3, 5, 8, 11, 12, 15, 20);
for ($i=0; $i<sizeof($vetor); $i++) //A função sizeof() retorna o número de elementos de um array.
{ 
	if ($vetor[$i] % 2 != 0) // Se o resto da divisão for diferente de zero, $i é número ímpar.
		{continue;} //Aqui a execução é interrompida e o programa retorna ao início do laço incrementando $i.
		$num_par=$vetor[$i]; //Armazena em $num_par os elementos acessados do vetor, que fogem á condição expressa no if.
		echo $num_par . ", ";
}
echo " são os números pares da sequência apresentada.";
?>
</body>
</html>