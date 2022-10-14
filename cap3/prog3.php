<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>prog3.php</title>
</head>
<body>
<?php 
/*
Exemplo de uso do recurso da concatenação;
Como se pode perceber, a concatenação também pode ser feita com as tags HTML.
*/
$dia=date("d/m/Y");
$base=5;
$haltura=10.0;
$area=($base*$haltura)/2;
echo "$dia" . "<br>";
echo "$area" . "<br>";
//Concatenando com strings teríamos:
echo "Hoje é dia " . $dia . "<br>";//Concatenando com a  tag <br> do HTML
echo "A área o triângulo é " . $area . "ua";
?>
</body> 
</html>