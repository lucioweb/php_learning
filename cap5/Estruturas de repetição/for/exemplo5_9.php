<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo5_9</title>
</head>
<body>
<?php 
echo "---------------------------------------------------------------------"."<br>";
echo "exemplo5_9 <br>";
echo "---------------------------------------------------------------------"."<br>";
$vetor[0][0]="Banana";
$vetor[0][1]="Laranja";
$vetor[1][0]="Abacaxi";
$vetor[1][1]="Manga";
for ($i=0; $i < 2; $i++) { 
	for ($k=0; $k < 2; $k++) { 
		echo "O elemento na posição $i$k do vetor é: ";
		echo $vetor[$i][$k]."<br>"; 
	}
}
?>
</body>
</html>