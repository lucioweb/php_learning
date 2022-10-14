<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo4_15</title>
</head>
<body>
<?php 
//Operadores binários.
$num=15;
$resultado1=$num>>1;//15=1111(base2). Deslocando 1bit para a direita teremos 01111, que é o equivalente a 7(base 10); 
$resultado2=$num<<2;//15=1111(base2). Deslocando 2bits para a esquerda temos 111100, que é o equivalente a 60(base 10).
echo "$resultado1";
echo "</br>";
echo "$resultado2";
?>
</body>
</html>