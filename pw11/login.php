<!doctype html>
<html>
<body>
<h2>login</h2>
<form method="post" action="login.php">
email:<input type="email" id="email" name="email" /></br>
senha:<input type="password" id="senha" name="senha" /></br>
<button name="bt1">Entrar</button>
</form>
<?php fazLogin(); ?>
</body>
</html>
<?php
function fazLogin(){
	if(isset($_POST["bt1"])){
		$email	=	$_POST["email"];
		$senha	=	$_POST["senha"];
		//TODO BUSCA DO BD
		if($senha == "123456"){
			session_start();
			$_SESSION["email"] = $email;
			$_SESSION["nome"] = "maria";
			header("location: dashboard.php");
		} else {
			echo "Usuario ou senha invalidas !!";
		}
	}
}
?>
