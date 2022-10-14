<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>array_2</title>
</head>

<body>
    <?php
    /*
Imprimindo na tela todos os elementos de um array bidimensional, utilizando loops (for) aninhados.
Repare que a variável $vetor é do tipo array, que armazena outros arrays.
Nessa estrutura, cada "tupla" de dados é um array.
*/
    echo "---------------------------------------------------------------------" . "<br>";
    echo "array_2 <br>";
    echo "---------------------------------------------------------------------" . "<br>";
    $vetor = array(
        array("Id", "Nome", "Pontos"),
        array(1, "Zé", 11),
        array(2, "José", 4),
        array(3, "Zéca", 22)
    );

    for ($linha = 0; $linha < 4; $linha++) {
        for ($coluna = 0; $coluna < 3; $coluna++) {
            echo $vetor[$linha][$coluna] . " | ";
        }
        echo "<br/> \n";
    }
    ?>
</body>

</html>