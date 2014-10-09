<?php

//Inclui a classe genérica CRUD
require_once ("../../functions/crud.class.php");

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

	public function comparaItem($produto_has_marca_id) {
		$this->execute_query("SELECT ");
	}

	public function comparaLista($listaProdutos) {
		//produto_has_marca_id, quantidade
		$mercado_id = mercado->buscaMercadosProximos();

		foreach ($mercado_id as $mercado) {
			for($i = 0; $i < $listaProdutos.lenght; $i++){
				$this->execute_query("SELECT preco.Mercado_id, preco.produto_has_marca_id,  FROM preco INNER JOIN produto WHERE preco.Mercado_id = $mercado AND preco.produto_has_marca_id = " . $listaProdutos[$i][0]);
			}
		}
	}

}

?>