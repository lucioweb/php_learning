<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>prog6</title>
</head>
<body>
<?php 
//Trabalhando com variáveis de momes dinâmicos. 
//Essa técnica funciona da seguinte maneira: basicamente o valor de uma variável é utilizado como identificador de outra variável.
$texto="Porto Alegre";
$futuro_identificador="cidade";//O valor "cidade" foi atribuído à variável "$futuro_identificador".
$$futuro_identificador=$texto;//Tem o mesmo valor que "$cidade=$texto".
echo "<h2 align=center>";
echo "Minha cidade é $cidade";//Repare que a variável "$cidade" foi criada dinamicamente.
echo "</h2>";
?>
</body>
</html>