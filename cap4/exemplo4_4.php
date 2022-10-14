<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo4_4</title>
</head>
<body>
<?php 
$num = 5000;//Variável estática!?
function testa_escopo_1()
{
	$num += 5;//Expressão que significa: "$num=$num+5".
	echo $num ."<br>";//Como a variável $num dentro da função não foi definida, temos que $num=0 e que $num+=5 é igual a 5. 
}
echo $num ."<br>";//Continua a valer 5000.
testa_escopo_1();//Imprime o valor  calculado dentro da função testa_escopo_1 que é igual a 5. 
?>
</body>
</html> 