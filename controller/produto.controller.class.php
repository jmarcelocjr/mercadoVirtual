<?php


//Inclui a classe genérica CRUD
require_once("../functions/crud.class.php");

class ProdutoController extends Crud {

	//Método construtor

    public function __construct() {
		
		//Passa como parâmetro a tabela
        parent::__construct("produto");
    }
	
	
	//Listagem de todas as produto
	
	public function lista(){
		return $this->execute_query("SELECT produto.id, produto.descricao, produto.Quantidade_id,  produto.Categoria_id, produto.status, produto.Setor_id  FROM produto;" );
	}
	
	public function insert(){
		return $this->execute_query("insert into produto (descricao, Quantidade_id, Categoria_id, status, Setor_id ) values ('". addslashes($descricao) . "' ,". addslashes($quantidade_id) . ", ". addslashes($categoria_id) . ", ". addslashes($status) . " ,". addslashes($setor_id) .");" );
	}
	public function update(){
		return $this->execute_query("update produto set  descricao = '". addslashes($descricao) . "',  Quantidade_id = '". addslashes($quantidade_id) . "', Categoria_id = ". addslashes($categoria_id) . ", status = ". addslashes($status) . ", Setor_id = ". addslashes($setor_id) . "  WHERE id = ". addslashes($id).";" );
	}
	public function delete(){
		return $this->execute_query("delete from produto WHERE id = ". addslashes($id).";" );
	}
		
		
	
	
}

?>