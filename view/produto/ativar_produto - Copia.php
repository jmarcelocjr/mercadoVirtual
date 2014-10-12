<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

/*
 * 	Descrição do Arquivo
 * 	@author - João Ricardo Gomes dos Reis
 * 	@data de criação - 09/09/2014
 * 	@arquivo  - lista.php
 */

//Importanto as classes externas
require_once("../../controller/produto.controller.class.php");
require_once("../../model/produto.class.php");
include_once("../../functions/functions.class.php");

session_start();

//Instanciando a classe controladora
$ProdutoController = new ProdutoController();
$produto    = new Produto();

$id = $_GET['id'];

//Instanciando a classe de funções
$functions	= new Functions;

//$produto->setStatus($_POST['Status']);

if($produto->getStatus() == 0){
$ativar_produto     = $ProdutoController->ativarProduto($id);
}else{
    $ativar_produto     = $ProdutoController->desativarProduto($id);
}
header('Location: produtos_inativos.php');

if(isset($_SESSION["id"])){
    $produto = $controller->loadObject($_SESSION["id"], $id);
}

//$listaproduto = $ProdutoController->lista();

?>