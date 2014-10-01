<?php

require_once ("../functions/connection.class.php");

function comparacao($array) {
	
	$array = [$id][$qntdd];
	
	$mercadosProximos = referencia();
	
	public function lista($where = null) {
	$sql = "SELECT * FROM mercado INNER JOIN preco ON mercado.id = preco.Mercado_id INNER JOIN produto_has_marca phm ON phm.id =            preco_has_marca_id IINER JOIN produto ON produto.id = preco.produto_id WHERE mercado.id = $id";
	
		if ($where != null) {$sql .= " WHERE $where;";}
		return $this->execute_query($sql);
	}
	
}

execute_querry(

?>


