<?php

session_start();

$idProduto = 0;
if (isset($_POST['idProduto'])) {
	$idProduto = $_POST['idProduto'];
}

if (!isset($_SESSION['idProdutos'])) {
	$_SESSION['idProdutos'] = array();
}

$isRepitido = false;
if ($idProduto != 0) {
	foreach ($_SESSION['idProdutos'] as $produto) {
		if ($produto == $idProduto) {
			$isRepitido = true;
		}
	}
	if (!($isRepitido)) {
		array_push($_SESSION['idProdutos'], $idProduto);
		echo "true";
	} else {
		echo "false";
	}
} else {
	echo "false";
}

?>