<?php

class estado {
	private $id;
	private $nome;
	private $Pais_id;
	private $uf;
	
	public function getId(){
		return $this->id;
	}
	
	public function getNome(){
		return $this->nome;
	}
	
	public function getPais_id(){
		return $this->Pais_id;
	}
	
	public function getUf(){
		return $this->uf;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function setPais_id($Pais_id){
		$this->Pais_id = $Pais_id;
	}
	
	public function setUf($uf){
		return $this->uf = $uf;
	}
}

?>