<!doctype html>
<html>
<body>
	<h1>Get & POST</h1>
	<?php
		if(isset($_POST["bt1"])) {
			echo "<h3>Dados Recebidos por POST</h3>";
			$nome	=	$_POST["nome"];
			$idade	=	$_POST["idade"];
			echo "nome=<b>$nome</b><br/>";
			echo "idade=<b>$idade</b><br/>";
		}
		if(isset($_GET["nome"]) && isset($_GET["idade"])) {
			echo "<h3>Dados Recebidos por GET</h3>";
			$nome	=	$_GET["nome"];
			$idade	=	$_GET["idade"];
			echo "nome=<b>$nome</b><br/>";
			echo "idade=<b>$idade</b><br/>";
		}
	
	
	?>
	</body>
	</html>