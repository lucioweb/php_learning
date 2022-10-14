<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo4_18</title>
</head>
<body>
<?php 
//Precedência de operadores.
$num=5;
$resultado=8+3*2+ ++$num;//8 + 3 * 2 + ($num+1).
echo "$num<br>";//Na linha anterior a variável $num foi incrementada, passando a valer 6.
echo $resultado;
?>
</body>
</html>