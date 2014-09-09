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
	
}

?>