<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>prog2.php</title>
</head>
<body>
<!--Modo1:-->
<?php 
echo "<h2 align='center'>My first PHP script!</h2>";
$data_de_hoje=date("d/m/Y");
echo "Hoje é dia " . $data_de_hoje;
?>

<!--Modo2:-->
<p align="center">Hoje é dia <?php echo "$data_de_hoje"; ?></p>
</body>
</html>