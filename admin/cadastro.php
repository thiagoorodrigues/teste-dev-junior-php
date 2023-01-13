<?php require_once "../config/dataBase.php" ;?>

<?php
  $mensagem = "";

  if(isset($_POST["titulo"])) {
    //Monto a consulta SQL
    $sql = "insert into produtos (titulo) value ('" . $_POST["titulo"] . "')";

    //Executo o comando SQL
    $resultado = mysqli_query($conexao, $sql);

    if($resultado > 0) {
      $mensagem = "Produto Cadastrado";
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset=UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Viewport" content="width=device-width,initial-scale=1.0">
    <title>Conf</title>
  </head>
  <body>
  <?php include ("../components/admin/nav.php");?>

    <h1>Cadastrar Produto</h1>

    <?php if($mensagem != "") {?>
    <h3><?=$mensagem?></h3>
    <?php } ?>


    <form action="cadastro.php" method="post">
      Descrição: <input type="text" name="titulo"/> </br>
      <input type="submit" value="salvar" />
    </form>


    


  </body>
</html>