<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title> Carrinho de Compras </title>
    <link href="main.css" rel="stylesheet" type="text/css" />
</head>
<body>
   <div id="corpo">

       <nav>
       </nav>

       <section id="lista-produtos">
        <div class="item">
          <img src="img/produto1.jpg" />
          <p>Celular Motorola</p>
          <p>R$ 1.000,00</p>
          <a href="carrinho.php?acao=adicionar">
             Comprar    
          </a>  
        </div>
      </section>
    </div>
</body>
</html>

