<?php

//Inclui a classe genérica CRUD
require_once ('../../functions/crud.class.php');

class ProdutoController extends Crud {

	//Método construtor

	public function __construct() {

		//Passa como parâmetro a tabela
		parent::__construct("produto");
	}

	//Listagem de todas as produto

	public function lista($where = null) {
		$sql = "SELECT produto.id as 'id', produto.descricao as 'produto', concat(quantidade.peso, '-', quantidade.unidade) as 'quantidade', setor.descricao as 'setor', setor.id as 'idSetor', marca.descricao as 'marca', status FROM produto INNER JOIN quantidade on quantidade.id = produto.Quantidade_id INNER JOIN setor on setor.id = produto.Setor_id INNER JOIN produto_has_marca phm on produto.id = phm.Produto_id INNER JOIN marca on marca.id = phm.Marca_id";
		if ($where != null) {$sql .= " WHERE $where;$";}
		return $this->execute_query($sql);
	}

	public function vinculaMarca() {
		return $this->execute_query("INSERT INTO produto_has_marca (id, Produto_id, Marca_id) VALUES (null, $produto_id, $marca_id);");
	}

	public function ativarProduto($id){
			$sql = "UPDATE produto SET status = 1 WHERE id = $id";
		return $this->execute_query($sql);
	}
	public function desativarProduto($id){
			$sql = "UPDATE produto SET status = 0 WHERE id = $id";
		return $this->execute_query($sql);
	}
	public function pegarStatus($id){
			$sql = "SELECT status FROM produto WHERE id = $id";
		return $this->execute_query($sql);
	}

	public function listarSetor($where = null){
		$sql = "SELECT id, setor.descricao as 'setor' FROM setor";
		if ($where != null) {$sql .= " WHERE $where;$";}
		return $this->execute_query($sql);
	}

}

?>