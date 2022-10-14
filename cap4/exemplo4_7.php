<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo</title>
</head>
<body>
<?php 
//Trabalhando com conversão de tipos de variáveis.
$x=50;//Inteito (int)
$y=2.35;//Decimal (float)
$soma=$x+(int)$y; //A conversão de tipo float/inteiro da variável $y, apenas desconsiderará a parte decimal da variável 
echo "O resultado dessa operação é " . $soma;
?>
</body>
</html>