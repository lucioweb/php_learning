<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo4_13</title>
</head>
<body>
<?php 
/*
 * Manipulando objetos. 
 * Uma variável criada para instaciar uma classe é chamada de objeto.
 * Um objeto pode acessar funções definidas dentro de uma classe.
 */
class Teste
{
	function Saudacao()
	{
		echo "Oi pessoal";
	}
}
$meu_objeto = new Teste;//Diz-se que a variável $meu_objeto é uma instância da classe Teste.
$meu_objeto -> Saudacao();//Repare que a classe Teste foi instanciada pela variável $meu_objeto. Nesse caso o objeto $meu_objeto é capaz de acessar a função Saudacao() dentro da classe, 
?>
</body>
</html>