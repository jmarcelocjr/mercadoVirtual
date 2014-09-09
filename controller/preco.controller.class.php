<?php


//Inclui a classe genérica CRUD
require_once("../functions/crud.class.php");

class PrecoController extends Crud {

	//Método construtor

    public function __construct() {
		
		//Passa como parâmetro a tabela
        parent::__construct("preco");
    }
	
	
	//Listagem de todas as preco
	
	public function lista(){
		return $this->execute_query("SELECT preco.id, preco.valor, preco.Produto_id,  preco.Mercado_id  FROM preco;" );
	}
	
	public function insert(){
		return $this->execute_query("insert into preco (valor, Produto_id, Mercado_id ) values (". addslashes($valor) . " , ". addslashes($produto_id) . ",". addslashes($mercado_id) .");" );
	}
	public function update(){
		return $this->execute_query("update preco set  nome = ". addslashes($valor) . ", Produto_id = '". addslashes($produto_id) . "', Mercado_id = ". addslashes($mercado_id) . "  WHERE id = ". addslashes($id).";" );
	}
	public function delete(){
		return $this->execute_query("delete from preco WHERE id = ". addslashes($id).";" );
	}
		
		
	
	
}

?>