<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

session_start();
include_once ("../../controller/mercado.controller.class.php");

$mercadoController = new MercadoController;

if (isset($_POST['position'])) {
	if (!isset($_SESSION['mercados'])) {
		$_SESSION['mercados'] = array();
	}
	$_SESSION['coordenadas'] = array();
	$latitude = $_POST['position'][0];
	$longitude = $_POST['position'][1];
	array_push($_SESSION['coordenadas'], $latitude);
	array_push($_SESSION['coordenadas'], $longitude);
	$distancia = $_SESSION['distancia'];
	$mercados = $mercadoController->buscaMercadosProximos($latitude, $longitude, $distancia);
	
	$_SESSION['mercados'] = $mercados;
}

?>