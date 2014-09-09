<?php
class mercado {
	private $id;
	private $nome;
	private $endereco;
	private $cidade_id;
	
	//Getters
	
	public function getId(){
		return $this->id;
	}
	
	public function getNome(){
		return $this->nome;
	}
	
	public function getEndereco(){
		return $this->endereco;
	}
	
	public function getCidadeId(){
		return $this->cidade_id;
	}
	
	//Setters
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	
	public function setCidadeId($cidade_id){
		$this->cidade_id = $cidade_id;
	}
}

?>