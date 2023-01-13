<!DOCTYPE html>
<html>
  <head>
    <title>Fale Conosco</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="/atividadeEcomerce/css/global.css">
    <link rel="stylesheet" href="/atividadeEcomerce/paginas/FaleConosco/ecommerce.css">
    <link rel="stylesheet" href="/atividadeEcomerce/paginas/FaleConosco/script.js">
  </head>

  <body>
    <div class="header">
      <div id="header">Fale Conosco</div>
    </div>

    <div class="menu">
      <a href="/atividadeEcomerce/index.php">Início</a>
      <a href="/atividadeEcomerce/paginas/produtos/Produtos.php">Produtos</a>
      <a href="/atividadeEcomerce/paginas/MeuCarrinho/MeuCarrinho.php">Meu Carrinho</a>
    </div>
    <div id="form">
      <div class="text-header">
        Olá. Ficou alguma dúvida ou sugestão? <br> Preencha o formulário e nos envie!
      </div>

      <form id="solicitacao" action="./">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="nome">
        <label for="E-mail">E-mail:</label>
        <input type="text" id="E-mail" name="E-mail">
        <label for="telephone">Telefone:</label>
        <input type="" id="telephone" >
        <section class="solicitation">
          <label for="texto">Informe aqui a sua solicitação:</label>
          <input value="" name="solicitacao" id="texto" required>
          <button type="button" class="button-form" onclick="alerta()">Enviar formulário</button>
        </section>
      </form>
    </div>  

    <script>
      function alerta(){
        var msg = document.getElementById('solicitacao');
        if(msg.value == ''){
          alert('confirme se todos os campos foram preenchidos');
          msg.focus();
          return false;
        } else{(msg.value == 'string')
            alert('Sua solicitação foi enviada, retornamos em breve!')
            return true;
          }
      }    
    </script>
  </body>
  
</html>