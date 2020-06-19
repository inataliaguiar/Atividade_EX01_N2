<?php

session_start();
include_once("banco.php");

$ra = filter_input(INPUT_GET, 'ra', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM aluno WHERE ra = '$ra'";
$resultado_usuario = mysqli_query($mysqli, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

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


</head>

<body>
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">Formulário</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="post" name="formulario" action="editar.php" id="formCadastro">

                    <div class="form-group">
                            <!-- <label>ID</label> -->
                            <input type="hidden" class="form-control" name="ra" id="ra" value="<?php echo $row_usuario['ra']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="nomeAluno" id="nomeAluno" value="<?php echo $row_usuario['nomeAluno']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Idade</label>
                            <input type="number" class="form-control" name="idade" id="idade" value="<?php echo $row_usuario['idade']; ?>">
                        </div>

                        <div class="form-group">
                            <label>Curso</label>
                            <input type="text" class="form-control" name="curso" id="curso" value="<?php echo $row_usuario['curso']; ?>">
                        </div>
                                     
                        <div class="form-group">
                            <label>Email para contato</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $row_usuario['email']; ?>">
                        </div>
                      

                        <div class="form-group col-md-4 col-md-offset-4">
                            <button type="submit" class="btn btn-success btn-lg btn-block" id="btn_save" name="enviar">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>