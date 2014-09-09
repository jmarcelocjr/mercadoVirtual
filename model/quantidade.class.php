<?php

class quantidade{
	private $id;
	private $pesoLiquido;
	private $pesoKilograma;
	private $unidade;
	
	public function getId(){
		return $this->id;
	}
	
	public function getPesoLiquido(){
		return $this->pesoLiquido;
	}
	
	public function getPesoKilograma(){
		return $this->pesoKilograma;
	}
	
	public function getUnidade(){
		return $this->unidade;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function setPesoLiquido($pesoLiquido){
		$this->pesoLiquido = $pesoLiquido;
	}
	
	public function setPesoKilograma($pesoKilograma){
		$this->pesoKilograma = $pesoKilograma;
	}
	
	public function setUnidade ($unidade){
		$this->unidade = $unidade;
	}
	
}

?>