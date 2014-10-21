<?php

session_start();

$idProduto = 0;
if (isset($_POST['idProduto'])) {
	$idProduto = $_POST['idProduto'];
}

if (!isset($_SESSION['listaProdutos'])) {
	$_SESSION['listaProdutos'] = array();
}

$isRepitido = false;
if ($idProduto != 0) {
	foreach ($_SESSION['listaProdutos'] as $produto) {
		if ($produto == $idProduto) {
			$isRepitido = true;
		}
	}
	if (!($isRepitido)) {
		array_push($_SESSION['listaProdutos'], $idProduto);
		echo "true";
	} else {
		echo "false";
	}
} else {
	echo "false";
}

?>