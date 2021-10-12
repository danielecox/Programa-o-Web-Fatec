<!doctype html>
<html>

<body>
    <h1>Calculadora</h1>
    <form method="post" action="pw10_atividade.php">

        N1:<input type="number" id="n1" name="n1" /><br />
        N2:<input type="number" id="n2" name="n2" /><br />

        Operação:
        <button name="bt1">+
            <button name="bt2">-
                <button name="bt3">x
                    <button name="bt4">/
                    </button>

    </form>
    <?php somar();
    subtrair();
    multiplicar();
    dividir();
    ?>
</body>

<?php


function somar()
{
    if (isset($_POST["bt1"])) {
        $a = $_POST["n1"];
        $b = $_POST["n2"];
        $c = ($a + $b);
        echo "<h3> Resultado = <b>$c</b></h3>";
    }
};

function subtrair()
{
    if (isset($_POST["bt2"])) {
        $a = $_POST["n1"];
        $b = $_POST["n2"];
        $c = ($a - $b);
        echo "<h3> Resultado = <b>$c</b></h3>";
    }
};

function multiplicar()
{
    if (isset($_POST["bt3"])) {
        $a = $_POST["n1"];
        $b = $_POST["n2"];
        $c = ($a * $b);
        echo "<h3> Resultado = <b>$c</b></h3>";
    }
};

function dividir()
{
    if (isset($_POST["bt4"])) {
        $a = $_POST["n1"];
        $b = $_POST["n2"];
        $c = ($a / $b);
        echo "<h3> Resultado = <b>$c</b></h3>";
    }
}
?>