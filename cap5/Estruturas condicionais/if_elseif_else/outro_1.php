<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>outro_1</title>
</head>
<body>
<?php 
$t = date("H");
if ($t < "10") {
  echo "Bom dia!";
} elseif ($t < "20") {
  echo "São " . $t . " então boa tarde!";
} else {
  echo "Boa noite!";
}
?>
</body>
</html>