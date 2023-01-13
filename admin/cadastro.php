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
    <link rel="stylesheet" href="admin.css">
    <title>Cadastro</title>
  </head>
  <body>
  <?php include ("../components/admin/nav.php");?>

    <h1>Cadastrar Carta Super Trunfo</h1>

    <?php if($mensagem != "") {?>
    <h3><?=$mensagem?></h3>
    <?php } ?>
    <div class="table">

      <form action="cadastro.php" method="post">

        Foto: <input class="form" type="text" name="foto" placeholder="insira a URL da imagem!"/> </br>

        Nome: <input class="form" type="text" name="nome"/> </br>

        Partidas: <input class="form" type="number" name="partidas-disputadas"/> </br>

        Vitorias: <input class="form" type="number" name="vitorias"/> </br>

        Gols Marcados: <input class="form" type="number" name="gols-marcados"/> </br>

        Ano de Nascimento: <input class="form" type="number" name="ano-de-nascimento"/> </br>
        <div class="button">
        <input type="submit" value="salvar" />
        </div>
      </form>
      </div>

    


  </body>
</html>