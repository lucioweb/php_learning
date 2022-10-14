<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo5_10</title>
</head>
<body>
<?php 
echo "---------------------------------------------------------------------"."<br>";
echo "vetor1 <br>";
echo "---------------------------------------------------------------------"."<br>";
/*
O comando foreach (para cada) nos oferece uma maneira mais fácil de percorrer os elementos de um array.
O que basicamente o comando foreach faz é criar uma variável ($key, por exemplo) para armazenar os índices enquanto o vetor é varrido.
A cada interação o ponteiro iterno do vetor avança para o índice seguinte. 
No final os valores armazenados são exibidos. 
Uma outra explicação para o foreach é a e que parece que o comaando cria dentro da variável vetor1, 
uma variável $v do tipo array vazia para armazenar os valores. 
*/
$vetor1 = array(1, 2, 3, 4);
foreach ($vetor1 as $v) {
	echo $v . "<br>";
}


/*
Exemplo de array com chave associativa, armazenando tipos diferentes de dados.
O PHP permite ainda a declaração de arrays associativos. 
Para esse fim, o construtor array() receberá chaves às quais os valores estarão associados como parâmetros.
*/
echo "---------------------------------------------------------------------"."<br>";
echo "vetor2 <br>";
echo "---------------------------------------------------------------------"."<br>";
$vetor2 = array(
 "chave1" => 1,
 "chave2" => "PHP",
 "chave3" => true
 );
foreach ($vetor2 as $key => $value) {
	echo "$key => $value" . "<br>";
}
/*
Também podemos sobrescrever o valor presente em uma posição específica do array utilizando a chave a ele associada. 
Ao executarmos o código abaixo, chave2 vai apontar para o valor numérico 2.
*/
$vetor2["chave2"] = 2;//Sobrescreve o valor da chave associativa "chave2" do vetor3.
echo "NB: A chave associativa \"chave2\" do vetor2 (\"PHP\") foi sobrescrita (\$vetor2[\"chave2\"] = 2) e guardará agora o parâmetro (valor) " . $vetor2["chave2"] . "." . "<br>";
/*
A chave associativa "chave2" guardava o parâmetro (valor) "PHP".
O comando foreach (para cada) nos oferece uma maneira mais fácil de percorrer os elementos de um array.
Basicamente se deve criar uma variável (key, por exemplo) para armazenar as chaves (chave1, ...)
e outra variável ($valor), para armazenar o valor ou parâmetro contido em cada chave do vetor.
Então $key armazena chave1, chave2 e chave3 e $valor armazena os valores associados às chaves (1, "PHP" e true).
Poderíammos interpretar foreach da seguinte maneira: "atribua a variável valor ($valor) a cada $key do vetor3 ($vetor3)".
Agora imprima o valor correspondente a cada chave associaiva do vetor. 
*/

foreach($vetor2 as $key => $valor){
    echo "{$key} => {$valor}\n" . "<br>";
 }
echo "---------------------------------------------------------------------"."<br>";
?>
</body>
</html>