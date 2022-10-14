<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo5_2</title>
</head>
<body>
<?php 
/*Estruturas condicionais.
Repare que o uso de elseif e de else não é obrigatório. 
O if pode aparecer sozinho, determinando se um bloco de instruções será ou não executado.
Se a condição avaliada no comando if ($media==10) for "false", o bloco de comandos do if não será executado 
e o programa seguirá seu fluxo normal.
*/
$nota1=10;
$nota2=10;
$media=($nota1+$nota2)/2;
if ($media==10){
    echo "Parabéns!";
    echo "<br>";
    echo "Você obteve a nota máxima.";
}
   
?>
</body>
</html>