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
	
	public function insert(){
		return $this->execute_query("insert into quantidade (pesoLiquido, pesoKilograma, unidade ) values (". addslashes($pesoLiquido) . " ,". addslashes($pesoKilograma) . ", ". addslashes($unidade) . ");" );
	}
	public function update(){
		return $this->execute_query("update quantidade set  pesoLiquido = ". addslashes($pesoLiquido) . ",  pesoKilograma = ". addslashes($pesoKilograma) . ", unidade = ". addslashes($unidade) . " WHERE id = ". addslashes($id).";" );
	}
	public function delete(){
		return $this->execute_query("delete from quantidade WHERE id = ". addslashes($id).";" );
	}
		
		
	
	
}

?>