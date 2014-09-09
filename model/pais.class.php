<?php

class pais {
	private $id;
	private $nome;
	private $pais_name;
	
	public function getId(){
		return $this->id;
	}
	
	public function getNome(){
		return $this->nome;
	}
	
	public function getPais_Name(){
		return $this->pais_name;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function setPais_Name($pais_name){
		$this->pais_name = $pais_name;
	}
	
}


?>