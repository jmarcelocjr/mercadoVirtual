<?php


//Inclui a classe genérica CRUD
require_once("../functions/crud.class.php");

class MarcaController extends Crud {

	//Método construtor

    public function __construct() {
		
		//Passa como parâmetro a tabela
        parent::__construct("marca");
    }
	
	
	//Listagem de todas as marcas
	
	public function lista(){
		return $this->execute_query("SELECT marca.id, marca.descricao FROM marca;" );
	}
	
	public function insert(){
		return $this->execute_query("insert into marca (descricao) values (' ". addslashes($descricao) . "');" );
	}
	public function update(){
		return $this->execute_query("update marca set descricao = '". addslashes($descricao) . "' WHERE id = ". addslashes($id).";" );
	}
	public function delete(){
		return $this->execute_query("delete from marca WHERE id = ". addslashes($id).";" );
	}
		
		
	
	
}

?>