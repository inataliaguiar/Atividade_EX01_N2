<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tela de Ferramentas</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="atividade.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.maskedinput-1.16.0.pack.js"></script>

</head>

<body>

    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">Ferramentas</div>
            <div class="panel-body">
                <div class="container col-md-12">

                <a href="index.php?modulo=Atividade&acao=formulario">
                        <div class="form-group col-col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="sair">Novo Formulário</button>
                        </div>
                </a>

                    <a href="index.php?modulo=Atividade&acao=visualizarAlunos">
                        <div class="form-group col-col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="sair">Ver Alunos</button>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</body>

</html>