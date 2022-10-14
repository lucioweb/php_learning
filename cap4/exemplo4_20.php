<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo4_20</title>
</head>
<body>
<?php 
//Precedência de operadores.
$num=7;
$resultado=8*($num%2);//Como os operadores "*" e "%" têm a mesma precedência, daremmos proridade à operação dentro dos parenteses. 
echo $resultado;
?>
</body>
</html>