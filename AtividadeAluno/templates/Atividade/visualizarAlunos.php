<?php
session_start();
include("banco.php");


$consulta = "select * from aluno";
$con = $mysqli->query($consulta) or die($mysli->error);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" id="bootstrap-css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  
  <title>Dados dos Alunos</title>
</head>
<style>
        body {
      background-color: white;
}

.panel {
    margin-top: 50px;
}

a:link {
    text-decoration: none;
}

#sair {
    margin-top: 20px;
}

@media screen and (max-width: 991px) {
    .btn_save {
        min-width: 100vw;
       
    }
}

.table{
 margin-top: 50px;
 /* margin-left: 200px; */

}
    </style>

<body>
        <div class="col-md-8 col-md-offset-2">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">RA</th>
                <th scope="col">Nome do Aluno</th>
                <th scope="col">Idade do Aluno</th>
                <th scope="col">Curso do Aluno</th>
                <th scope="col">Email do Aluno</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <?php
            while ($dado = $con->fetch_array()) {


            ?>
              <tbody>
                <tr>
                  <td><?php echo $dado['ra'];   ?></td>
                  <td><?php echo $dado['nomeAluno'];   ?></td>
                  <td><?php echo $dado['idade'];   ?></td>
                  <td><?php echo $dado['curso'];   ?></td>
                  <td><?php echo $dado['email'];   ?></td>
                  <td><?php 
                  echo "<a href='editarAluno.php?ra=" . $dado['ra'] . "'>Editar</a><br>";
                  ?>
                  <td>
      
                    <a href="javascript: if(confirm('Tem certeza que deseja deletar o usuário <?php echo $dado['nomeAluno']; ?>?'))
			              location.href='deletar.php?ra=<?php echo $dado['ra']; ?>';" style="color: red">Deletar</a>
                  </td>
                </tr>
              </tbody>
            <?php } ?>
          </table>
          <a href="index.php?modulo=Atividade&acao=formulario">
            <div class="form-group col-md-4 col-md-offset-4">
              <button type="submit" class="btn btn-dark btn-lg btn-block" id="sair">Novo Formulário</button>
            </div>
          </a>
        </div>

</script>
      
</body>

</html>