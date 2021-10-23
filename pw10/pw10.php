<!doctype html>
<html>

<body>
    <h1>PHP</h1>
    <?php media();


    ?>
</body>

<?php
function media()
{
    $a = 52;
    $b = 56.2;
    $nome = "Maria";
    $c = ($a + $b) / 2;
    if ($c >= 60) {
        echo "<h2>Aprovado $nome, parabéns! = $c<\h2>";
    } else {
        echo "<h2>Reprovado $nome, verificar nota = $c</h2>";
    }
    //comentário 1 linha

    /* comentário
        diversas 
        linhas
        */
}
?>