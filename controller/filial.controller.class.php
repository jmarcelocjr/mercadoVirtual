<?php


//Inclui a classe genérica CRUD
require_once("../functions/crud.class.php");

class FilialController extends Crud {

	//Método construtor

    public function __construct() {
		
		//Passa como parâmetro a tabela
        parent::__construct("filial");
    }
	
	
	//Listagem de todas as filial
	
	public function lista(){
		return $this->execute_query("SELECT filial.Cidade_id, filial.endereco, filial.id, filial.Mercado_id, filial.nome FROM filial;" );
	}
	
		
	
	
}

?>