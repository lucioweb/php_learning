<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo6_1</title>
</head>
<body>
<?php 
/*
Introdução ao conceito de função em PHP.
Funções são blocos de código reutilizáveis que podem realizar qualquer tipo de tarefa e 
que podem ser ativadas a qualquer momento na execução do programa.
Uma função pode receber valores (argumentos). 
O uso de argumentos em uma fução é opcional.
Quando o PHP encontra uma chamada para uma função a execução do programa é interrompida e o fluxo
do programa vai para dentro do bloco da função.
Com o término da função, a execução volta para o programa principal no ponto em que foi feita
a chamada da função e o comando seguinte é executado.
Na sintaxe da função é previsto um comando também opcional, o "return", cuja finalidade é a de retornar
um valor para o ponto de chamada da função.
Exemplo de função sem a presença do "return".   
*/
function soma_valores($valor1, $valor2, $valor3) 
{
$soma=$valor1+$valor2+$valor3;
echo "A soma dos valores $valor1, $valor2 e $valor3 é igual a $soma <br>";
//echo "é igual a $soma <br>";
}

$n1=10;
$n2=20;
$n3=30;
soma_valores($n1, $n2, $n3);//Aqui a função soma_valores() é invocada para que seja realizada a soma dos valores $n1, $n2 e $n3 passados como parâmetros.
echo "O programa segue seu fluxo normal a partir do ponto de chamada da função.<br>";
soma_valores($n1, $n2, $n3);//Novamente a função soma_valores() sendo invocada.
echo "Mais uma vez o programa segue seu fluxo normal a partir do ponto de chamada da função pois não foi solicitado o return do resultado da operação realizada dentro da função.<br>";
?>
</body>
</html>