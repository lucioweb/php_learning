<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>prog7</title>
</head>
<body>
<?php 
//Operadores aritméticos que atuam em apenas um operando; operadores unuários;
//Trabalhando com Pré-incremento/decremento e Pós-incremento/decremento.
//Exemplo: ++$a (Incrementa o valor da variável antes da realização de alguma operação);
//Exemplo: $a++ (Significa que a variável $a será incrementada após a realização da operação que a envolva).  
$a = 1;
$b = 3;
$c = 5;
$resultado1 = ++$b-$a; //++$b=$b+1=3+1=4;
$resultado2 = $c-- + $a; //Primeiro realizamos a soma $c+$a=5+1, depois decrementamos a variável $c=5, que assume o valor 4.
$resultado3 = --$a + $c++; //Primeiro decrementamos a variável $a, depois somamos $a+$c=1+4=5, em seguida incrementamos $c ($c++), que assume o valor 6;
echo "a=$a<br> b=$b <br>c=$c<br>";
echo "resultado1=$resultado1<br> resultado2=$resultado2 <br>resultado3=$resultado3<br>";
?>
</body>
</html>