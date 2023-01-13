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
    <title>Produtos</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/atividadeEcomerce/css/global.css">
    <link rel="stylesheet" href="/atividadeEcomerce/paginas/produtos/ecommerce.css">
    <script src="/script.js"></script>
  </head>

  <body>
    <div class="header">
    <h1 id="header">cartas</h1>
    </div>
    

    
      <div class="products">

      <?php
        foreach($resultado as $key =>$value){
      ?>
        <div class="item">
          <div class="header-item">
            <img src= "<?=$value["foto"]?>" style= width:200px></img>
          </div>
            <div class=""><?=$value["nome"]?></div>
            <div class=""><?=$value["partidas-disputadas"]?></div>
            <div class=""> <?=$value["gols-marcados"]?></div>
            <div class=""> <?=$value["ano-de-nascimento"]?></div>
          </div>
            
        </div>
          <?php
          
        }
        ?>

        


      </div>


      <script>
        function alerta(){
          var msg = document.getElementById('comprar');
          if(msg.value == ''){
            alert('Item adicionado no seu carrinho');
            return false;
          }
        }
      </script>

  </body>

</html>