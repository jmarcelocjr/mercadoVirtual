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
	
	public function insert(){
		return $this->execute_query("insert into mercado (nome, endereco, Cidade_id ) values ('". addslashes($nome) . "' ,' ". addslashes($endereco) . "',". addslashes($cidade_id) .");" );
	}
	public function update(){
		return $this->execute_query("update mercado set  nome = '". addslashes($nome) . "',  endereco = '". addslashes($endereco) . "', Cidade_id = ". addslashes($cidade_id) . "  WHERE id = ". addslashes($id).";" );
	}
	public function delete(){
		return $this->execute_query("delete from mercado WHERE id = ". addslashes($id).";" );
	}
		
		
	
	
}

?>