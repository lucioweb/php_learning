<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>array_1</title>
</head>

<body>
	<?php
	/*
Array é um tipo de dado, integer, float, string ou boolean. 
Contudo, um array pode armazenar mais de um valor, relacionando-o a uma chave. 
No PHP, um mesmo array pode conter diferentes tipos de dados, incluindo novos arrays.
*/
	//Exemplos de sintaxes para os arrays
	echo "---------------------------------------------------------------------" . "<br>";
	echo "array_1 <br>";
	echo "---------------------------------------------------------------------" . "<br>";
	$vetor1 = array(1, 2, 3); //Para declarar um array em PHP utilizamos o construtor de linguagem array().
	$vetor2 = ["a", "b", "c"]; //Sintaxe alternativa para a declaração de um vetor.

	/*
Exemplo de array com chave associativa, armazenando tipos diferentes de dados.
O PHP permite ainda a declaração de arrays associativos. 
Para esse fim, o construtor array() receberá chaves às quais os valores estarão associados como parâmetros.
*/

	$vetor3 = array(
		"chave1" => 1,
		"chave2" => "PHP",
		"chave3" => true
	);
	$vetor3["chave2"] = 2; //Sobrescreve o valor da chave associativa "chave2" do vetor3.
	echo "O elemento índice 1 do vetor1 é: " . $vetor1[1] . "<br>"; //Imprime o elemento na posição de índice 1 do vetor1.
	echo "O elemento índice 1 do vetor2 é: " . $vetor2[1] . "<br>"; //Imprime o elemento na posição de índice 1 do vetor2.
	echo "A chave associativa \"chave2\" do vetor3 guarda o parâmetro (valor) " . $vetor3["chave2"] . "<br>"; //A chave associativa "chave2" guarda o parâmetro (valor) "PHP".

	//O comando foreach (para cada), nos oferece uma maneira mais fácil de percorrer os elementos de um array.
	/*Basicamente se deve criar uma variável (key, por exemplo) para armazenar as chaves (chave1, ...)
e outra variável ($valor), para armazenar o valor ou parâmetro contido em cada chave do vetor.
Então $key armazena chave1, chave2 e chave3 e $valor armazena os valores associados às chaves (1, "PHP" e true).
Poderíammos interpretar foreach da seguinte maneira: "atribua a variável valor ($valor) a cada $key do vetor3 ($vetor3) "
*/

	foreach ($vetor3 as $key => $valor) {
		echo "{$key}: {$valor}\n" . "<br>";
	}

	echo "---------------------------------------------------------------------" . "<br>";
	?>
</body>

</html>