<?php require_once "../config/dataBase.php" ;?>

<?php
  $mensagem = "";

  if(isset($_POST["nome"]) && isset($_POST["foto"]) && $_POST["nome"] != "") {
    //Monto a consulta SQL

    $sql = "insert into cartas (`id`, `foto`, `nome`, `partidas-disputadas`, `vitorias`, `gols-marcados`, `ano-de-nascimento`) value (NULL, '" . $_POST["foto"] . "', '" . $_POST["nome"] . "', '" . $_POST["partidas-disputadas"] . "', '" . $_POST["vitorias"] . "', '" . $_POST["gols-marcados"] . "', '" . $_POST["ano-de-nascimento"] . "')";
    //Executo o comando SQL
    $resultado = mysqli_query($conexao, $sql);

    if($resultado > 0) {
      $mensagem = "Carta Cadastrada";
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset=UTF-8>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Viewport" content="width=device-width,initial-scale=1.0">
    <title>Cadastro</title>
  </head>
  <body>
  <?php include ("../components/admin/nav.php");?>

    <h1>Cadastrar Carta</h1>

    <?php if($mensagem != "") {?>
    <h3><?=$mensagem?></h3>
    <?php } ?>


    <form action="cadastro.php" method="post">
      foto: <input type="text" name="foto"/> </br>

      Nome: <input type="text" name="nome"/> </br>

      partidas: <input type="number" name="partidas-disputadas"/> </br>

      vitorias: <input type="number" name="vitorias"/> </br>

      Gols Marcados: <input type="number" name="gols-marcados"/> </br>

      Ano de Nascimento: <input type="number" name="ano-de-nascimento"/> </br>

      <input type="submit" value="salvar" />
    </form>


    


  </body>
</html>