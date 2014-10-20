<?php
 session_start();
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//Importanto as classes externas
require_once("../../controller/produto.controller.class.php");
include_once("../../functions/functions.class.php");
 
 $sessao = session_id();
 
 $produto = $_GET["id"];
 
 mysql_query(“DELETE FROM carrinho WHERE cod = $produto AND sessao = \”$sessao\”“);
  Redireciona para a página de visualização
 header(“Location: carrinho.php”);
 ?>