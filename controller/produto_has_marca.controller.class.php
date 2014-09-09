<?php


//Inclui a classe genérica CRUD
require_once("../functions/crud.class.php");

class Produto_has_marcaController extends Crud {

	//Método construtor

    public function __construct() {
		
		//Passa como parâmetro a tabela
        parent::__construct("produto_has_marca");
    }
	
	
	//Listagem de todas as produto_has_marca
	
	public function lista(){
		return $this->execute_query("SELECT produto_has_marca.Produto_id, produto_has_marca.Marca_id  FROM produto_has_marca;" );
	}
	
	public function insert(){
		return $this->execute_query("insert into produto_has_marca (Produto_id, Marca_id ) values (". addslashes($produto_id) . " ,". addslashes($marca_id) . ");" );
	}
	
}

?>