<!doctype html>
<html>

<body>
    <h1>PHP Parte 2</h1>
    <form method="post" action="pw10b.php">

        n1:<input type="number" id="n1" name="n1" /><br />
        n2:<input type="number" id="n2" name="n2" /><br />
        <button name="bt1">Media<button />


    </form>
    <?php media();


    ?>
</body>

<?php
/*
ID identificacação objeto na página do navegador
ID serve para identificar o objeto dentro da página
name é o nome do parametro que será enviado por método por http
ao chegar no backend o parâmetro será recuperado e usado
parâmetros sempre chegam no formato string
Maioria das funções são umas chamadas por ajax
porta 80 é listener do apache
processamento do lado do servidor

*/

function media()
{
    if (isset($_POST["bt1"])) {
        $a = $_POST["n1"];
        $b = $_POST["n2"];
        $c = ($a + $b) / 2;
        echo "<h3> A média = <b>$c</b></h3>";
    }
}
?>