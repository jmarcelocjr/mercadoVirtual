<?php


//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");

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
	
}

?>