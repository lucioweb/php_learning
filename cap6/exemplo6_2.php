<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo6_2</title>
</head>
<body>
<?php
/*
Introdução ao conceito de função em PHP.
Funções são blocos de código reutilizáveis capazes de realizar qualquer tipo de tarefa e 
que podem ser ativados a qualquer momento na execução do programa.
Uma função pode receber valores (argumentos). 
O uso de argumentos em uma fução é opcional.
Quando o PHP encontra uma chamada para uma função a execução do programa é interrompida e o fluxo
do programa vai para dentro do bloco da função.
Com o término da função, a execução volta para o programa principal no ponto em que foi feita
a chamada da função e o comando seguinte é executado.
Na sintaxe da função é previsto um comando também opcional, o "return", cuja finalidade é a de retornar
um valor para o ponto de chamada da função.
Exemplo de função com a presença do "return".   

O comando "return", devolve para o ponto de chamada da função, o valor da variável ($nome) que aparece imediatamente
após o return.

A função strtoupper() que quer dizer "str to upper, string para upper" é usada para converter uma string em maiúsculas. 
Esta função recebe uma string como parâmetro e converte todas as letras minúsculas presentes na string em maiúsculas. 
Todos os outros caracteres numéricos ou especiais na string permanecem inalterados.
*/ 

function maiuscula($uma_expressao) //recebe uma expressao (que pode ser uma variável) como argumento.
{
$expressao=strtoupper($uma_expressao);//A função strtoupper que quer dizer str to upper, converte a string para maiúscula. 
return $expressao;
}

$nome="jose";
$nome_maisculo= maiuscula ($nome);//Ponto de chamada da função.
echo "Meu nome é $nome_maisculo";
?>
</body>
</html>