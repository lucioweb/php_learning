<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<?php
//Avalia como verdadeiro porque $var está vazio
/*
O que é visto abaixo é considerado vazio:
- "" (uma string vazia)
- 0 (0 como um inteiro)
- 0.0 (0 como um ponto flutuante)
- "0" (0 como uma string)
- null
- false
- array() (um array vazio)
- $var; (uma variável declarada, mas sem valor)
*/

$var=0;
if (empty($var)) {
    echo 'A variável $var é 0, vazia, ou não está definida';
///Experimente substituir o valor de $var=0 por $var=120, por exemplo    
}
else {
  echo "A Variável \$var não está vazia.";
}
?>
</body>
</html>

