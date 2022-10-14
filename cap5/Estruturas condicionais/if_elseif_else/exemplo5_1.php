<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo5_1</title>
</head>
<body>
<?php 
/*Estruturas condicionais.
Repare que o uso de elseif e de else não é obrigatório. 
O if pode aparecer sozinho, determinando se um bloco de instruções será ou não executado.
Se a condição avaliada no comando if ($media<3) for "false", o bloco de comandos do if não será executado 
e o programa seguirá seu fluxo normal, testando a condição do primeiro elseif ($media<5), se houver.
Se todas as condições examinadas (if e elseif) forem falsas, o bloco executado será aquele que vem após o else. 
*/
$nota1=1;
$nota2=10;
$media=($nota1+$nota2)/2;
if ($media<3)
    $desempenho="PÉSSIMO";//repare que a variável $desempenho não havia sido declarada até o momento.
elseif ($media<5) 
    $desempenho="RUIM";
elseif($media<7)
    $desempenho="BOM";
elseif($media<9)
    $desempenho="MUITO BOM";
else
    $desempenho="EXCELENTE";
echo "O seu desempenho foi $desempenho";
?>
</body>
</html>