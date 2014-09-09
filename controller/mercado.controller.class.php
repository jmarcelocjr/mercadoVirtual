<?php


//Inclui a classe genérica CRUD
require_once("../functions/crud.class.php");

class MercadoController extends Crud {

	//Método construtor

    public function __construct() {
		
		//Passa como parâmetro a tabela
        parent::__construct("mercado");
    }
	
	
	//Listagem de todas as mercado
	
	public function lista(){
		return $this->execute_query("SELECT mercado.id, mercado.nome, mercado.endereco, mercado.Cidade_id  FROM mercado;" );
	}
	
}

?>