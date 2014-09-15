<?php

//Inclui a classe genérica CRUD
require_once (__DIR__ . '/../functions/crud.class.php');

class CategoriaController extends Crud {

	//Método construtor

	public function __construct() {
		//Passa como parâmetro a tabela
		parent::__construct("categoria");
	}

	//Listagem de todas as categorias

	public function lista() {
		return $this->execute_query("SELECT id, descricao FROM categoria;");
	}

}

?>