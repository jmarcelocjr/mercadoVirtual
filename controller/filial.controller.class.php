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
	
	public function insert(){
		return $this->execute_query("insert into filial (Cidade_id, endereco, Mercado_id, nome) values ( ". addslashes($cidade_id) . ",' ". addslashes($endereco) . "', ". addslashes($mercado_id) . ",' ". addslashes($nome) . "');" );
	}
	public function update(){
		return $this->execute_query("update filial set Cidade_id = ". addslashes($cidade_id) . ", endereco = '". addslashes($endereco) . "', Mercado_id = ". addslashes($mercado_id) . ", nome = '". addslashes($nome) . "'  WHERE id = ". addslashes($id).";" );
	}
	public function delete(){
		return $this->execute_query("delete from filial WHERE id = ". addslashes($id).";" );
	}
		
		
	
	
}

?>