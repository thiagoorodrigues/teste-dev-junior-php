<?php
  //criação da conexão com o SGBD
  $conexao = mysqli_connect("localhost","root","");

  //Escolho o banco de dados de SGBD que será trabalhado
  mysqli_select_db($conexao, "super-trunfo");

  //Monto a consulta SQL
  $sql = "select * from cartas";

  //Executo o comando SQL
  $resultado = mysqli_query($conexao, $sql);

  //quantidade de linhas retornadas
  $total = mysqli_num_rows($resultado);
  ?>



<!DOCTYPE html>
<html>
  <head>
    <title>Cartas</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/cartas.css">
  </head>

  <body>
    <div class="header">
    <h1 id="header">Super Trunfo Card's</h1>
    </div>
    

      <div class="products">

      <?php
        foreach($resultado as $key =>$value){
      ?>
        <div class="item">
          <div class="img">
            <img id="box-image" src= "<?=$value["foto"]?>" style= width:200px></img>
          </div>
            <div class="box-linha">
              <div class="linha-carta">Nome: <?=$value["nome"]?> </div>
              <div class="linha-carta">Partidas Disputadas: <?=$value["partidas-disputadas"]?></div>
              <div class="linha-carta">Vitórias: <?=$value["vitorias"]?></div>
              <div class="linha-carta">Gols Marcados:  <?=$value["gols-marcados"]?></div>
              <div class="linha-carta">Ano De Nascimento: <?=$value["ano-de-nascimento"]?></div>
            </div>
          </div>
            
          <?php
        }
        ?>
      </div>
    </div>
  </body>
</html>