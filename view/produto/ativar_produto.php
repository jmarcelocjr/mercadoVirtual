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



$id = $_GET['codigo'];
//$status = $_GET['status'];

echo $id;

//Instanciando a classe de funções
$functions	= new Functions;

$listaproduto = $ProdutoController->pegarStatus($id);
 while($ativar = mysqli_fetch_array($listaproduto)) { 
 

if($ativar["status"] == 0){
$ativar_produto = $ProdutoController->ativarProduto($id);
}//else{
if($ativar["status"] == 1){    
$ativar_produto = $ProdutoController->desativarProduto($id);
}
}
header('Location: produtos_inativos.php');

if(isset($_SESSION["codigo"])){
    $produto = $controller->loadObject($_SESSION["codigo"], $id);
    //$produto = $controller->loadObject($_SESSION["status"], $id);
}


//$listaproduto = $ProdutoController->lista();

?>