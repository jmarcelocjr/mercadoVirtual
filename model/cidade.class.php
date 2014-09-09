<?php

class cidade{
	
	private $id;
	private $nome;
	private $Estado_id;
	
	public function getId(){
		return $this->id;
	}
	
	public function getNome(){
		return $this->nome;
	}
	
	public function getEstado_id(){
		return $this->pais_name;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function setEstado_id($Estado_id){
		$this->Estado_id = $Estado_id;
	}
	
}

?>
