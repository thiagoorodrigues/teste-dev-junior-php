<?php require_once "../config/dataBase.php" ;?>

<?php
  $mensagem = "";
  $linha = array();
  
    //quando clica em salvar
    if(isset($_POST["nome"]) && isset($_POST["id"])) {

    //Monto a consulta SQL
    $sql = "update cartas set nome = '" . $_POST["nome"] . "', foto = '" . $_POST["foto"] . "'  where id = " . $_POST["id"];

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
    $sql = "select id, nome, foto, 'partidas-disputadas', vitorias, 'gols-marcados', 'ano-de-nascimento' from cartas where id = " . $id ;

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
    <link rel="stylesheet" href="admin.css">
    <title>Conf</title>
  </head>

  <body>
  <?php include ("../components/admin/nav.php");?>

    <h1>Editar Carta Super Trunfo</h1>

    <?php if($mensagem != "") {?>
    <h3><?=$mensagem?></h3>
    <?php } ?>
    <div class="table">

      <form action="editar.php" method="post">
        <input type="hidden" name="id" value="<?=$linha["id"]?>">
        FOTO:<input class="form" type="text" name="foto" value="<?=$linha["foto"]?>"> </br>
        NOME:<input class="form" type="text" name="nome" value="<?=$linha["nome"]?>"> </br>
        partidas: <input class="form" type="number" name="partidas-disputadas" value="<?=$linha["partidas-disputadas"]?>"/> </br>
        vitorias: <input class="form" type="number" name="vitorias" value="<?=$linha["vitorias"]?>"/> </br>
        Gols Marcados: <input class="form" type="number" name="gols-marcados" value="<?=$linha["gols-marcados"]?>"/> </br>
        Ano de Nascimento: <input class="form" type="number" name="ano-de-nascimento" value="<?=$linha["'ano-de-nascimento'"]?>"/> </br>
        <div class="button">
          <input type="submit" value="salvar" />
        </div>
      </form>
    </div>

  </body>
</html>