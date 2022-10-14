<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo5_3</title>
</head>
<body>
<?php 
$nota1=10;
$nota2=10;
$media=($nota1+$nota2)/2;
switch($media){
	case($media<3):
		echo "PÉSSIMO";
		break;
	case($media>=3 && $media<5):	
		echo "RUIM";
		break;

   case($media>=5 && $media<7): 
      echo "BOM";
      break;

   case($media>=7 && $media<9): 
      echo "MUITO BOM";
      break;

   default:
   echo"EXCELENTE";      
	}
?>
</body>
</html>