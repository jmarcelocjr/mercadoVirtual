<?php

class filial{
	private $id;
	private $nome;
	private $endereco;
	private $Cidade_id;
	private $Mercado_id;

	public function getId(){
		return $this->id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function getCidade_id(){
		return $this->Cidade_id;
	}

	public function getMercado_id(){
		return $this->Mercado_id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function setCidade_id($Cidade_id){
		$this->Cidade_id = $Cidade_id;
	}

	public function setMercado_id($Mercado_id){
		$this->Mercado_id = $Mercado_id;
	}
}

?>