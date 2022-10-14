<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo5_8</title>
</head>
<body>
<?php 
//Utilizamos o comando "for", quando necessitamos executar um conjunto de instruções um número determinado de vezes.
//A estrutura  do comando é  for (inicialização; condição; operador) {comandos}
for ($i=10; $i>=0 ; $i--) {//Lê-se: para i=10, enquanto i for maior ou igual a zero (i>=0), decremente i de uma unidade (i--). Imprima i. 
	// code...
	echo "$i " . ",";//Concatenando a variável $i com uma vírgula para que a série núnerica seja separada por vírgula (10, 9, 8, ...)
}
?>
</body>
</html>