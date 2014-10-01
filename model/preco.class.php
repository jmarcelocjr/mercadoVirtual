<?php

class preco {
	private $id;
	private $valor;
	private $produto_has_marca_id;
	private $Mercado_id;

	public function getId() {
		return $this->id;
	}

	public function getValor() {
		return $this->valor;
	}

	public function getProduto_has_marca_id() {
		return $this->produto_has_marca_id;
	}

	public function getMercado_id() {
		return $this->Mercado_id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setValor($valor) {
		$this->valor = $valor;
	}

	public function setProduto_has_marca_id($produto_has_marca_id) {
		$this->produto_has_marca_id = $produto_has_marca_id;
	}

	public function setMercado_id($Mercado_id) {
		$this->Mercado_id = $Mercado_id;
	}

}

?>