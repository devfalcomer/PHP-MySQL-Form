<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {
	$result_usuario = "DELETE FROM usuarios WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if (mysqli_affected_rows($conn)) {
		$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
		header("Location: index.php");
	} else {
		$_SESSION['msg'] = "<p style='color:red;'>Erro! Usuário não foi apagado com sucesso</p>";
		header("Location: editar.php?id=$id");
	}
} else {
	$_SESSION['msg'] = "<p style='color:red;'>Nenhum usuário foi deletado, tente novamente mais tarde ou selecione um usuário</p>";
	header("Location: editar.php?id=$id");
}
