<?php


//Inclui a classe genérica CRUD
require_once("../functions/crud.class.php");

class QuantidadeController extends Crud {

	//Método construtor

    public function __construct() {
		
		//Passa como parâmetro a tabela
        parent::__construct("quantidade");
    }
	
	
	//Listagem de todas as quantidade
	
	public function lista(){
		return $this->execute_query("SELECT quantidade.id, quantidade.pesoLiquido, quantidade.pesoKilograma,  quantidade.unidade,  FROM quantidade;" );
	}
	
}

?>