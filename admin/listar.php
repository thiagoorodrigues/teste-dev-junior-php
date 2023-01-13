<?php require_once "../config/dataBase.php" ;?>

<?php
  $mensagem = "";

  if(isset($_GET["excluir"])) {
    //Monto o delete SQL
    $sql = "delete from cartas where id = " . $_GET["excluir"] ;
    //Executo o comando SQL
    $resultado = mysqli_query($conexao, $sql);

    if($resultado > 0) {
      $mensagem = "Produto removido";
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
  <style>
    table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
    </style>
</head>

<body>
  <?php include ("../components/admin/nav.php");?>

  <h1>Pagina Inicial</h1>

  <?php if($mensagem != "") {?>
  <h3><?=$mensagem?></h3>
  <?php } ?>

  <?php
  //Monto a consulta SQL
  $sql = "select * from cartas";
  //Executo o comando SQL
  $resultado = mysqli_query($conexao, $sql);
  //quantidade de linhas retornadas
  $total = mysqli_num_rows($resultado);
  ?>

  <h3>quantidade de linhas: <?=$total?></h3>

  <table>
    <thead>
      <tr>
        <td></td>
        <td>foto</td>
        <td>nome</td>
        <td>partidas disputadas</td>
        <td>vitórias</td>
        <td>Gols Marcados</td>
        <td> Ano de Nascimento</td>
      </tr>
    </thead>
    <tbody>
    <?php
    //Percorrendo o resultado e imprimindo no html que será enviado ao cliente
    for($i=0; $i<$total;$i++) {
      $linha = mysqli_fetch_assoc($resultado);      
  ?>
      <tr>
        <td> <?=$linha['id']?></td>
        <td><img src=" <?=$linha['foto']?>" style= "width: 200px" ></td>
        <td> <?=$linha['nome']?></td>
        <td> <?=$linha['partidas-disputadas']?></td>
        <td> <?=$linha['vitorias']?></td>
        <td> <?=$linha['gols-marcados']?></td>
        <td> <?=$linha['ano-de-nascimento']?></td>
        <td style="text-align:right;">
          <a href="/teste-dev-junior/admin/editar.php?id=<?=$linha['id']?>">Editar</a>
          <a href="/teste-dev-junior/admin/listar.php?excluir=<?=$linha['id']?>">Excluir</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>