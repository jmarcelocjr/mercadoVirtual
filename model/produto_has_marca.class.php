<?php

class produto_has_marca {
	private Produto_id;
	private Marca_id;

	public function getProduto_id(){
		return Produto_id;
	}

	public function getMarca_id(){
		return Marca_id;
	}

	public function setProduto_id($Produto_id){
		$this->Produto_id = $Produto_id;
	}

	public function setMarca_id($Marca_id){
		$this->Marca_id = $Marca_id;
	}
}

?>