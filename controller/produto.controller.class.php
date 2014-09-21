<?php

//Inclui a classe genérica CRUD
require_once ("../functions/crud.class.php");

class ProdutoController extends Crud {

	//Método construtor

	public function __construct() {

		//Passa como parâmetro a tabela
		parent::__construct("produto");
	}

	//Listagem de todas as produto

	public function lista($where = null) {
		$sql = "SELECT produto.descricao as 'produto', concat(quantidade.peso, '-', quantidade.unidade), setor.descricao as 'setor', marca.descricao as 'marca' FROM produto INNER JOIN quantidade on quantidade.id = produto.Quantidade_id INNER JOIN setor on setor.id = produto.Setor_id INNER JOIN marca on marca.id  = produto.Marca_id";
		if ($where != null) {$sql .= " WHERE $where;";}
		return $this->execute_query($sql);
	}

}

?>