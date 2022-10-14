<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>prog4</title>
</head>
<body>
/*
Exemplo de uso de aspas duplas como delimitadores;
Com aspas duplas como delimitadores pode-se realizar a interpolação de variáveis;
Interpolação de variáveis consiste em incluir em uma variável ($frase2, por exemplo), o valor de outra ($time e $ano, por exemplo);
*/
<?php 
$time="Grêmio";
$ano= 1983;
$frase1="O $time é o melhor!";
$frase2="O $time foi campeão do mundo em $ano.";
echo "<h3>$frase1</h3>";
echo "<h3>$frase2</h3>";
?>
</body>
</html>