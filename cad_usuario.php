<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>CRUD - Cadastrar</title>
	<link rel="stylesheet" href="cad_usuario.css">
</head>

<body>
	<div class="form">
		<h1>Cadastrar Usuário</h1>
		<?php
		if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_cad_usuario.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
			
			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<label>CPF: </label>
			<input type="number" name="cpf" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<label>Telefone: </label>
			<input type="number" name="tel" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<label>Endereço: </label>
			<input type="text" name="end" placeholder="Digite o seu melhor e-mail"><br><br>
			
			<input type="submit" value="Cadastrar">
			<a href="index.php">Listar</a><br>
		</form>
	</div>
</body>

</html>