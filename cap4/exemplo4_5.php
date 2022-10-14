<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo4_5</title>
</head>
<body>
<?php 
$num = 5000;//variável global.
function testa_escopo_1()
{
	global$num;
	$num += 5;//Expressão que significa: "$num=$num+5".
	//Como a variável $num dentro da função é a variável global $num = 5000, temos que $num=$num+5, equivale a $num=5005
	echo $num ."<br>"; 
}
echo $num ."<br>";//Continua a valer 5000.
testa_escopo_1();//Imprime o valor  calculado dentro da função testa_escopo_1 que é igual a 5005. 
?>
</body>
</html>