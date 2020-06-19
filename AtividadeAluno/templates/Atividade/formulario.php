<?php

session_start()
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cadastro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <link rel="stylesheet" href="atividade.css">

    <style>
        .error {
            color: red;
        }
    </style>

    <script>
        $(document).ready(function() {
            jQuery.validator.setDefaults({
                debug: true,
                success: "valid"
            });
            $("#formCadastro").validate({
                rules: {
                    email: {
                        required: true,
                    },
                    nomeAluno: {
                        required: true,
                    },

                    curso: {
                        required: true,
                        
                    },

                    ra: {
                        required: true,
                    },

                    idade: {
                        required: true,
                    }
            

                },
                messages: {
                    email: "Informe um email válido!",
                    nomeAluno: "Informe seu primeiro nome!",
                    idade: "Informe sua idade!",
                    curso: "Informe seu curso!",
                    ra: "Informe seu ra:",

                },

                submitHandler: function(form) {
                    form.submit();
                }

            });
        });
    </script>

<!-- <?php
// $ra = $_POST['ra'];
// $nomeAluno = $_POST['nomeAluno'];
// $idade = $_POST['idade'];
// $curso = $_POST['curso'];
// $email = $_POST['email'];

// $sql = "INSERT INTO 'aluno'(
//     'ra', 
//     'nomeAluno', 
//     'idade', 
//     'curso', 
//     'email',  
//     )
//     VALUES (
//     '$ra',
//     '$nomeAluno',
//     '$idade',
//     '$curso',
//     '$email',
//         )";

//        if(!$sql) {
//            echo "Ocorreu um erro";
//        }
//        else {
//            echo "Dados Inseridos";
//        }

?> -->

</head>

<body>
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">Formulário</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="post" name="formulario" action="index.php?modulo=Atividade&acao=respformulario" id="formCadastro">

                        <div class="form-group">
                            <label>RA</label>
                            <input type="number" class="form-control" name="ra" id="ra" >
                        </div>

                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nomeAluno" id="nomeAluno">
                        </div>

                        <div class="form-group">
                            <label>Idade</label>
                            <input type="number" class="form-control" name="idade" id="idade">
                        </div>

                        <div class="form-group">
                            <label>Curso</label>
                            <input type="text" class="form-control" name="curso" id="curso">
                        </div>
                                     
                        <br>                      

                        <div class="form-group">
                            <label>Email para contato</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                      

                        <div class="form-group col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_save" name="enviar">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>