<?php
session_start();
include_once("banco.php");

$ra = filter_input(INPUT_POST, 'ra', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nomeAluno', FILTER_SANITIZE_STRING);
$idi = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$curs = filter_input(INPUT_POST, 'curso', FILTER_SANITIZE_STRING);
$ema = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

//  echo  $nome, $idi, $curs, $ema;

$result_usuario = "UPDATE aluno SET nomeAluno='$nome', idade='$idi', curso='$curs', email='$ema'  WHERE ra='$ra'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);


// if(mysqli_affected_rows($mysqli)){
// 	header("Location: index.php?modulo=Atividade&acao=visualizarAlunos");
// }else{
// 	echo "Erro ao Alterar";
// }
// 
if (mysqli_query($mysqli, $result_usuario)) {
	header("Location: index.php?modulo=Atividade&acao=visualizarAlunos");
  } else {
	echo "Error updating record: " . mysqli_error($mysqli);
  }
?>
