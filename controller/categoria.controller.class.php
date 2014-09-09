<?php


//Inclui a classe genérica CRUD
require_once("../functions/crud.class.php");

class CategoriaController extends Crud {

	//Método construtor

    public function __construct() {
		
		//Passa como parâmetro a tabela
        parent::__construct("categoria");
    }
	
	
	//Listagem de todas as categorias
	
	public function lista(){
		return $this->execute_query("SELECT categoria.id, categoria.descricao FROM categoria;" );
	}
	
	public function insert(){
		return $this->execute_query("insert into categoria (descricao) values (' ". addslashes($descricao) . "');" );
	}
	public function update(){
		return $this->execute_query("update categoria set descricao = '". addslashes($descricao) . "' WHERE id = ". addslashes($id).";" );
	}
	public function delete(){
		return $this->execute_query("delete from categoria WHERE id = ". addslashes($id).";" );
	}
		
		
	
	
}

?>