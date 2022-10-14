<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>prog8</title>
</head>
<body>
<?php 
/*
Exemplo de inicialização de mais de uma variável de inicialização no comando "for".
Também é possível, como no caso do prog8, termos mais de um operador no terceiro parâmetro do comando.
*/
echo "---------------------------------------------------------------------"."<br>";
echo "prog8<br>";
echo "---------------------------------------------------------------------"."<br>";
for ($i=0, $k=10 ; $i < 10 ; $i++, $k--) { 
	echo "\$i vale $i e \$k vale $k";
	if ($i==$k) {
		echo " (\$i e \$k são iguais)";
	}
	echo "<br>";
}
?>
</body>
</html>