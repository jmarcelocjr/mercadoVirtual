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

	public function comparaLista($listaProdutos, $mercados) {
		//produto_has_marca_id, quantidade
		//$mercados_id = mercado->buscaMercadosProximos();

		//salvar [0] = mercado_id [1] = phm_id [2] = valor [3] = quantidade
		$listaPrecosProdutos = array();
		foreach ($mercados as $mercado) {
			for ($i = 0; $i < $listaProdutos . lenght; $i++) {
				$preco = $this->execute_query("SELECT preco.Mercado_id, preco.produto_has_marca_id, preco.valor FROM preco INNER JOIN produto WHERE preco.Mercado_id = $mercado[0] AND preco.produto_has_marca_id = " . $listaProdutos[$i][0]);
				array_push($listaPrecosProdutos, mysql_fetch_row($preco));
			}
		}
		$_SESSION["ProdutosPrecos"] = $listaPrecosProdutos;
	}

}

?>