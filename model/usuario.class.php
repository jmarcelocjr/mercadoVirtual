<?php

class usuario{
	
	private $id;
	private $login;
	private $senha;
	private $mercado_id;
	private $ativo;
	private $nivel;	
	
	//Getters
	
	public function getId(){
		return $this->id;
	}
	
	public function getLogin(){
		return $this->login;
	}
	
	public function getSenha(){
		return $this->senha;
	}
	
	public function getMercado_Id(){
		return $this->mercado_id;
	}
	
	public function getAtivo(){
		return $this->ativo;
	}
	
	public function getNivel(){
		return $this->nivel;
	}
	
	//Setters
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function setLogin($login){
		$this->login = $login;
	}
	
	public function setSenha($senha){
		$this->senha = $senha;
	}
	
	public function setMercado_Id($mercado_id){
		$this->mercado_id = $mercado_id;
	}
	
	public function setAtivo ($ativo){
		$this->ativo = $ativo;
	}
	
	public function setNivel($nivel){
		$this->nivel = $nivel;
	}
}

?>