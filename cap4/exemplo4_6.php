<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo4_6</title>
</head>
<body>
<?php 
$num = 5000;//variável global.
function testa_escopo_1()
{
	echo $GLOBALS['num'] ."<br>";
	$GLOBALS['num']++;//Expressão que significa: $GLOBALS['num']=$GLOBALS['num']+1.
}
testa_escopo_1();//Imprime o valor de $GLOBALS['num']=5000, incrementa em 1 o seu valor e atualiza o valor da variável $num.
echo $num ."<br>";//Quando a variável $num for invocada nesse ponto do programa já terá sido incrementada pela função testa_escopo-1.
?>
</body>
</html>