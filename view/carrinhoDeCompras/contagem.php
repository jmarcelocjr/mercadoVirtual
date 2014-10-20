1.<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//Importanto as classes externas
require_once("../../controller/produto.controller.class.php");
include_once("../../functions/functions.class.php");
session_start();
$sessao = session_id();
6. // Obtendo o códigodo produto
7. $produto = $_GET["produto"];
8. ?>
9. <html>
    <body>
10. <?php
11. // Agora insiro os novos dados no banco de dados
12. if(!mysql_query(“INSERT INTO carrinho (cod, quant, sessao) VALUES ($produto, 1, \”$sessao\”)”, $con)) {
13. echo “O produto não pode ser adicionado ao carrinho de compras”;
14. } else {
15. echo “O produto foi adicionado ao carrinho de compras<br /><br />”;
16. echo “<a href=\”index.php\”>Continuar comprando</a>”;
17. }
18. ?>
19. </body></html>