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

		//salvar [0] = mercado_id [1] = phm_id [2] = valor [3] = quantidade
		$listaPrecosProdutos = array();
		$mercadoLista = array();
		foreach ($mercados as $mercado) {
			for ($i = 0; $i < sizeof($listaProdutos); $i++) {
				$preco = $this->execute_query("SELECT preco.Mercado_id, preco.produto_has_marca_id, preco.valor FROM preco WHERE preco.Mercado_id = $mercado[0] AND preco.produto_has_marca_id = " . $listaProdutos[$i][0]);
				if(mysqli_num_rows($preco) >= 1){
					$preco = mysqli_fetch_row($preco);
					array_push($preco, $listaProdutos[$i][1]);
					array_push($preco, "true");
					array_push($mercadoLista, $preco);
				}else{
					$preco = array($mercado[0], $listaProdutos[$i][0], $listaProdutos[$i][1], "false");
					array_push($mercadoLista, $preco);
				}

			}
			array_push($listaPrecosProdutos, $mercadoLista);
			$mercadoLista = array();
		}
		return $listaPrecosProdutos;
	}

	public function calculaPrecoTotal($listaProdutoMercados){
		$precoTotal = 0;

		foreach ($listaProdutoMercados as $produto) {
			$isAtivo = end($produto);
			if($isAtivo == "true"){
				$precoTotal += ($produto[2] * $produto[3]);
			}
		}

		return $precoTotal;

	}


}

?>