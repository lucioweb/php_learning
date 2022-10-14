<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
function triplo($numero)
{
	$x = $numero * 3;
	return $x;
}
$valor=5;
echo "O triplo de $valor é " . triplo($valor);
?>
</body>
</html>