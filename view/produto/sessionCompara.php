<?php
session_start();
if (isset($_POST['quantidades'])) {
	if (!isset($_SESSION['produtos'])) {
		$_SESSION['produtos'] = array();
	}
	$produtos = array();

	$quantidades = $_POST['quantidades'];

	foreach ($quantidades as $quantidade) {
		foreach ($_SESSION['idProdutos'] as $idProduto) {

			if ($quantidade[0] == $idProduto) {
				if (!in_array($idProduto, $produtos)) {
					$produto = array($idProduto, $quantidade[1]);
					array_push($produtos, $produto);
				}
				break;
			}
		}
	}
	$_SESSION['produtos'] = $produtos;
	$_SESSION['distancia'] = $_POST['quantidades'][0][2];

}

?>

