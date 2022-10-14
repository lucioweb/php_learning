<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>exemplo4_2</title>
</head>
<body>
<?php 
//Utilizando aspas invertidas para executar comandos no shell do windows.
echo `dir c:\wamp64\www\desenvolvendo_websites_com_php\cap3/s /b > c:\wamp64\www\desenvolvendo_websites_com_php\lista.txt`; 
//Cria em um caminho especificado uma lista (lista.txt) dos arquivos existentes no diretório c:\wamp64\www\desenvolvendo_websites_com_php\cap3. 
//A opção /s é para listar tudo que tiver dentro dos subdiretórios também e a opção /b é para mostrar o caminho completo sem as opções de data, tamanho do arquivo, etc...
echo "Sua lista foi criada em c:\wamp64\www\desenvolvendo_websites_com_php\lista.txt";
?>
</body>
</html>