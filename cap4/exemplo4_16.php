<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo4.17</title>
</head>
<body>
<?php
//Operadores de atribuição.
$soma=0;
$valor1=10;
$valor2=20;
$valor3=30;
$soma+=$valor1;//Equivale a $soma=$soma+$valor1=10
$soma+=$valor2;//Equivale a $soma=$soma+$valor2=10+20=30
$soma*=$valor3;//Equivale a $soma=$soma*$valor3=30*30=900
$soma%=100;//$soma assume o resto da divisão de 900%100 (novecentos módulo 100).
echo "O resto da divisão de 900/100 é ". $soma;
?>
</body>
</html>