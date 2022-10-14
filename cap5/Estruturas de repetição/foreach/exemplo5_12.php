<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo5_12</title>
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
*/
$i=0;
$k=1;
while ($k<10) 
{
	$i++;
	$k++;
	while ($i<20)
	{
		if ($i==10) {
			echo "Se \$i=$i, a condição expressa no primeiro while, deixa de ser atendida, o loop dentro do while é encerrado e o programa passa ao teste da condição dentro do segundo while. O break 1 encerra o primeiro while e após ele nada mais será executado. <br>";
			break 1;
			echo "Esse loco de código portanto, não será executado";
		}
		elseif ($i==15) {
			echo"Encerra o segundo while.";
			break 2;
		}
		else {
		$i++;
	}
	}	
}

?>
</body>
</html>