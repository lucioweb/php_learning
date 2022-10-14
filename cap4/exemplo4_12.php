<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo4-12</title>
</head>
<body>
<?php 
//Manipulando arrays (vetores).
//O índice de um array é um valor numérico. Todavia o índice pode também ser um texto que nesse caso recebe o nome de chave assocativa.
$vetor1=array(10,50,100,150,200);
echo "Arrays se iniciam na posição de índice 0, logo o elemento do vetor que ocupa a posição de nº 2 é:" . "<br>";
echo "O elemento de índice 2 do vetor \$vetor1=array(10,50,100,150,200) é " . $vetor1[2] . ".<br>";
echo $vetor1[2] . "<br>";//referencia a posição índice 2 do vetor1
$vetor2=array(1,2,3,"nome"=>"Joaquim");
echo "O elemento de índice 0 do vetor \$vetor2=array(1,2,3,\"nome\"=>\"Joaquim\") é " . $vetor2[0] . ".<br>";
echo $vetor2[0] . "<br>";//Referencia a posição índice 0 do vetor2
echo "O elemento do vetor \$vetor2=array(1,2,3,\"nome\"=>\"Joaquim\") cuja chave associativa é \"nome\" é " . $vetor2['nome'] . ".<br>";
echo $vetor2['nome']. ".<br>";
?>
</body>
</html>