<?php

//Inclui a classe genérica CRUD
require_once ("../functions/crud.class.php");

class PrecoController extends Crud {

	//Método construtor

	public function __construct() {

		//Passa como parâmetro a tabela
		parent::__construct("preco");
	}

	//Listagem de todas as preco

	public function lista() {
		return $this->execute_query("SELECT preco.id, preco.valor, preco.produto_has_marca_id,  preco.Mercado_id  FROM preco;");
	}

}

?>