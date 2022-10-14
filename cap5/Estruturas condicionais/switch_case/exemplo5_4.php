<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo5_4</title>
</head>
<body>
<?php 
/*
A variável $sorteio recebe um valor aleatório entre 0 e 5;
Por meio do switch verificamos a variável $sorteio a fim de executar um procedimento para cada valor possível;
Verificamos se o valor sorteado foi 0, 1 ou 2 e para cada situação imprimimos uma mensagem específica;
Caso o valor sorteado não seja 0, 1 ou 2 imprimimos a mensagem padrão (default) "Jogue novamente".
*/
$nota1=7;
$nota2=10;
$media=($nota1+$nota2)/2;
$sorteio = rand(0,5);
switch($sorteio){
   case 0:
         echo $sorteio;
         break;
   case 1:
         echo $sorteio;
         break;
   case 2:
         echo $sorteio;
         break;
   case 3:
         echo $sorteio;
         break;
   case 4:
         echo $sorteio;
         break;
   default://O uso do default não é obrigatório na estrutura do switch; default equivale ao comando else na estrutura do if.
         echo "Tente novamente";
         break;
}
?>
</body>
</html>