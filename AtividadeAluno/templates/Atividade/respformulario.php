
 <?php
session_start();

$raa = $_POST['ra'];
$nome = $_POST['nomeAluno'];
$idi = $_POST['idade'];
$curs = $_POST['curso'];
$ema = $_POST['email'];

$strcon =  mysqli_connect('localhost','root','', 'aluno') or die ('Erro ao conectar');
$dadosInsert ="INSERT into aluno(ra,nomeALuno,idade,curso,email) values";
$dadosInsert .=  "($raa,'$nome',$idi,'$curs','$ema')";
mysqli_query($strcon, $dadosInsert) or die ('Erro ao conectar');
mysqli_close($strcon);



?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="atividade.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript">
		$(document).ready(function() {
			$('#listar-usuario').DataTable({			
				"processing": true,
				"serverSide": true,
				"ajax": {
					"url": "banco.php",
					"type": "POST"
				}
			});
		} );
		</script>
    <title>Mensagem de Envio</title>
</head>

<body>
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-success">
            <div class="panel-heading">Sucesso</div>
            <div class="panel-body">
                <div class="container col-md-12">
                    <form method="POST" action="index.php?modulo=Atividade&acao=ferramentas">
                        <div class="form-group">
                            <label>Seu Formulário foi enviado com sucesso! </label>
                        </div>
                        
                        <div class="form-group col-col-md-offset-4">
                            <button type="submit" class="btn btn-dark btn-lg btn-block" id="btn_back">Ir para ferramentas!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>