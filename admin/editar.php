<?php require_once "../config/dataBase.php" ;?>

<?php
  $mensagem = "";
  $linha = array();
  

    //quando clica em salvar
    if(isset($_POST["nome"]) && isset($_POST["id"])) {

    //Monto a consulta SQL
    $sql = "update cartas set nome = '" . $_POST["nome"] . "' where id = " . $_POST["id"];

    //Executo o comando SQL
    $resultado = mysqli_query($conexao, $sql);

    if($resultado > 0) {
      $mensagem = "carta atualizada";
    }
  }

    //entra no formulário e carrega os dados
  if(isset($_GET["id"]) || isset($_POST["id"])) {

    $id = isset($_GET["id"])?$_GET["id"]:$_POST["id"];

    //Monto a consulta SQL
    $sql = "select id, nome from cartas where id = " . $id ;

    //Executo o comando SQL
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);
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

    <h1>Editar Produto</h1>

    <?php if($mensagem != "") {?>
    <h3><?=$mensagem?></h3>
    <?php } ?>


    <form action="editar.php" method="post">
      <input type="hidden" name="id" value="<?=$linha["id"]?>">
      <input type="text" name="nome" value="<?=$linha["nome"]?>">
      
      <input type="submit" value="salvar" />
    </form>


  

  </body>
</html>