<?php

session_start();
include_once("banco.php");
$raa = filter_input(INPUT_GET, 'ra', FILTER_SANITIZE_NUMBER_INT);
if(!empty($raa)){
	$result_usuario = "DELETE FROM aluno WHERE ra='$raa'";
	$resultado_usuario = mysqli_query($mysqli, $result_usuario);
    if(mysqli_affected_rows($mysqli)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
		header("Location: index.php?modulo=Atividade&acao=visualizarAlunos");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		header("Location: index.php?modulo=Atividade&acao=visualizarAlunos");
	}
}
else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: index.php?modulo=Atividade&acao=visualizarAlunos");
}

?>

