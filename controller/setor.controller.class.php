<?php


//Inclui a classe genérica CRUD
require_once("../../functions/crud.class.php");

class SetorController extends Crud {

	//Método construtor

    public function __construct() {
		
		//Passa como parâmetro a tabela
        parent::__construct("setor");
    }
	
	
	//Listagem de todas as setors
	
	public function lista(){
		return $this->execute_query("SELECT setor.id, setor.descricao FROM setor;" );
	}
	
}

?>