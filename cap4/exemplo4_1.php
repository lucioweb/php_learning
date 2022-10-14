<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo4_1</title>
</head>
<body>
<?php 
$palavra="teste";
$frase="Isto é um $palavra";
echo $frase;
//Utilizando aspas duplas como delimitadores é possível fazer interpolação de variáveis.
//Utilizando aspas duplas como delimitadores é possível também inserir caracteres de controle.
echo '<br>';
echo "Esta é uma citação: \"A vida com cada ...\" .<br>";
echo "A bola custou R\$ 40,00." . "<br>";
echo "A vida com cada coisa em seu lugar \n não vale a pena nem a dor de ser vivida." // O caractere "\n" insere quebra de linha no modo texto.
?>
</body>
</html>