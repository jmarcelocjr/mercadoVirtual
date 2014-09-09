<?php

class produto{
	
	private $id;
	private $descricao;
	private $Quantidade_id;
	private $Categoria_id;
	private $status;
	private $Setor_id;

	public function getId(){
		return $this->id;
	}
	
	public function getDescricao(){
		return $this->descricao;
	}
	
	public function getQuantidade_id(){
		return $this->Quantidade_id;
	}
	
	public function getCategoria_id(){
		return $this->Categoria_id;
	}
	
	public function getStatus(){
		return $this->status;
	}
	
	public function getSetor_id(){
		return $this->Setor_id;
	}
	
	//Setters
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	
	public function setQuantidade_id($Quantidade_id){
		$this->Quantidade_id = $Quantidade_id;
	}
	
	public function setCategoria_id($Categoria_id){
		$this->Categoria_id = $Categoria_id;
	}
	
	public function setStatus ($status){
		$this->status = $status;
	}
	
	public function setSetor_id($Setor_id){
		$this->Setor_id = $Setor_id;
	}