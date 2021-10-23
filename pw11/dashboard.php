<?php
	session_start();
	if(isset($_SESSION["nome"])==false) {
		header("location: login.php");
	}

	function mostrarValores(){
		$nome	=	$_SESSION["nome"];
		$email	=	$_SESSION["email"];
		$id		=	session_id();
		echo "nome=<b>$nome</b><br/>email=<b>$email</b><br/>id=<b>$id</b><br/>";
	}
?>
<html>
	<body>
		<h1>Dashboard</h1> 
		<a href="sair.php">Sair do sistema</a><br/><br/>
		
		<?php mostrarValores(); ?>
		
	</body>
</html>	
