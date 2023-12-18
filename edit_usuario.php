<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>CRUD - Editar</title>
	<link rel="stylesheet" href="edit_usuario.css">
</head>

<body>
	<div class="form">
		<h1>Editar Usuário</h1>
		<?php
		if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">

			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo"
				value="<?php echo $row_usuario['nome']; ?>"><br><br>

			<label>E-mail: </label>
			<input type="email" name="email" placeholder="Digite o seu melhor e-mail"
				value="<?php echo $row_usuario['email']; ?>"><br><br>

			<label>CPF: </label>
			<input type="number" name="cpf" placeholder="Digite seu CPF"
				value="<?php echo $row_usuario['cpf']; ?>"><br><br>

			<label>Telefone: </label>
			<input type="number" name="tel" placeholder="Digite seu Telefone"
				value="<?php echo $row_usuario['tel']; ?>"><br><br>

			<label>Endereço: </label>
			<input type="text" name="ender" placeholder="Digite seu  Endereço"
				value="<?php echo $row_usuario['ender'] ?>"><br><br>

			<input type="submit" value="Editar">
			<a href="index.php">Listar</a><br>
		</form>
	</div>
</body>

</html>