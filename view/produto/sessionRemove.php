<?php

session_start();

$idProduto = 0;
if (isset($_POST['idProduto'])) {
	$idProduto = $_POST['idProduto'];
	for ($i = 0; $i < sizeof($_SESSION['idProdutos']);
		$i++) {
		if ($idProduto == $_SESSION['idProdutos'][$i]) {
			unset($_SESSION['idProdutos']);
		}
	}
}

?>