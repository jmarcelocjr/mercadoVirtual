<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//Importanto as classes externas
session_start();
require_once("../../controller/produto.controller.class.php");
include_once("../../functions/functions.class.php");
$sessao = session_id();
?>
 <html>
<head>
    <title>Lista Carrinho</title>
</head>
<body>
    <form action="carrinho" method="post">
    <?php
$itens = mysql_query ("SELECT carrinho.cod, carrinho.quant, produto.produto FROM produto,carrinho
    WHERE carrinho.cod = produtos.id AND carrinho.sessao = \”$sessao\”");
?>
<?php
while($item = mysql_fetch_assoc($itens)) {
 ?>
 <tr>
 <td><a><?php echo $item["cod"] ?></a></td>
 <td><input type=”text” name=”quantidade[<? echo $item["cod"] ?>]” value=”<? echo $item["quant"] ?>”></td>
 <td><a href=”excluir.php?id=<?php echo $item["cod"] ?>”><img src=images.jpg” alt=”Excluir item”/><td>
 </tr>
<?php
}
?>
    </form>  
</body>
</html>
