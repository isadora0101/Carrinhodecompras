<?php
//avisando o php que vamos trabalhar com sessões.
session_start();

// adicionar ao carrinho 
if(esset($_get['adicionar'])) {
    $temp = array("produto" => "Celular Motorola", 
    "preco" => 1000.00,
    "quantidade" => 1,
    "total" =>1000.00);

    $_session['carrinho'][]= $temp;
}

//referênciando a variável de "sessão carrinho"
// na variável local "carrinho".
$carrinho = $_session['carrinho'];

// Obtenha a quantidade de produtos que estão no carrinho
// usando a função count
$total_produtos = count($carrinho);
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
     <h1>Produtos no Carrinho</h1>
        <table>
         <thead>
             <tr>
                  <th>Produto</th>
                  <th>Quantidade</th>
                  <th>Preço</th>
                  <th>Total</th>
             <tr>
          </thead>
         </tbody>
           <!-- Percorrendo o array de produtos com a estrutura for !-->    
           <?php for($i=0; $i<=$total_produtos; $i++): ?>
           <tr>
            <td><?= $carrinho[$i]['produto'] ?></td>
            <td><?= $carrinho[$i]['qnt'] ?></td>
            <td><?= $carrinho[$i]['preco'] ?></td>
            <td><?= $carrinho[$i]['total'] ?></td>
           <tr>
        <?php endfor; ?>
      <tbody>
    </table>  
 </div>