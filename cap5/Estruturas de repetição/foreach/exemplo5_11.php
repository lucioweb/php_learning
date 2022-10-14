<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo5_11</title>
</head>
<body>
<?php 
/*
Uso do "break". 
Estruturas de controle de fluxo de execução.
O break é utilizado para encerrar um comando em execução.
Pode ser usado com as estruturas condicionais for, foreach, while, ou switch case.
Quando o brake é encontrado dentro de algumas dessas estruturas, o fluxo de  execução passa para o 
primeiro comando após o término da estrutura condicional.
É um recuro utilizado para a forçar a execução do programa a sair de um laço condicional.
No exemplo a seguir, o laço poderá ser encerrado (break) por duas razões:
1. Se K for igual ou maior que 5. 
Nesse caso todos os valores a partir de $k=1 serão impressos.
2. Se algum índice do vetor referenciar o valor "abacaxi". 
Nesse caso apenas os valores entre "laranja" (exclusive) e "abacaxi" (exclusive) serão impressos.
*/
$vetor1 = array("laranja", "banana", "caju", "abacaxi", "goiaba", );
$k=1;
while ($k<5) {
	if ($vetor1[$k]=="abacaxi") {
		break;
	}
	echo $vetor1[$k] . "<br>";
	$k++;
}

?>
</body>
</html>