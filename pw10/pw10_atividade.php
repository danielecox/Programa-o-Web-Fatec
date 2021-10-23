<!doctype html>
<html>
	<body>
	<h1>Calculadora</h1>
	<form method="post" action="calculadora.php">
	N1: <input type="number" id="n1" name="n1" required /><br/>
	N2: <input type="number" id="n2" name="n2" /><br/>
	<button name="b1">+</button>
	<button name="b2">-</button>
	<button name="b3">*</button>
	<button name="b4">/</button>	
	<button name="b5">T</button>
	</form>
	<?php
		if(isset($_POST["b1"])) somar();
		if(isset($_POST["b2"])) subtrair();
		if(isset($_POST["b3"])) multiplicar();
		if(isset($_POST["b4"])) dividir();
		if(isset($_POST["b5"])) tabuada();
	?>
</body>
</html>
<?php
function somar(){
	$n1	=	$_POST["n1"];
	$n2	=	$_POST["n2"];	
	$r  = $n1 + $n2;
	echo "<h3>A soma = $r</h3>";
}
function subtrair(){
	$n1	=	$_POST["n1"];
	$n2	=	$_POST["n2"];	
	$r  = $n1 - $n2;
	echo "<h3>A subtração = $r</h3>";
}
function multiplicar(){
	$n1	=	$_POST["n1"];
	$n2	=	$_POST["n2"];	
	$r  = $n1 * $n2;
	echo "<h3>A multiplicação = $r</h3>";
}
function dividir(){
	$n1	=	$_POST["n1"];
	$n2	=	$_POST["n2"];	
	$r  = $n1 / $n2;
	echo "<h3>A divisão = $r</h3>";
}
function tabuada(){
	$n1	=	$_POST["n1"];
	echo "<table border='1'>";
	for($i=1; $i<=10; $i++){
		$r  = $n1 * $i;
		echo "<tr><td>$i</td><td>$n1</td><td>=$r</td></tr>";
	}
	echo "</table>";
}
?>