<?php

	if (!empty($_POST)){

		if($_POST['login'] == "gabriel"){

			if($_POST['senha'] == "123"){

				echo "<script>window.location = 'pag2.php' </script>";
				exit;

			}else{

				$status = "Senha Incorreta";

			}

		}else{

			$status = "Login Incorreto";

		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="main.css"/>
	</head>

	<body>

		<div class="login">

			<?php

				if(!empty($status)){
			?>
				<h3 class="erro"><?php echo $status; ?></h3>
			<?php
				}

			?>

			<form name="login" method="post" action="index.php">
				
				<div><input type="text" name="login" placeholder="LOGIN"/></div>
				<div><input type="password" name="senha" placeholder="SENHA"/></div>
				<input type="submit" value="enviar"/>

			</form>

		</div>

	</body>
</html>