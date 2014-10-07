<?php

//Inclui a classe genérica CRUD
<<<<<<< HEAD
require_once ('../../functions/crud.class.php');
=======
require_once (__DIR__ . '/../functions/crud.class.php');
>>>>>>> Giovani

class ProdutoController extends Crud {

	//Método construtor

	public function __construct() {

		//Passa como parâmetro a tabela
		parent::__construct("produto");
	}

	//Listagem de todas as produto

	public function lista($where = null) {
<<<<<<< HEAD
		$sql = "SELECT produto.id as 'id', produto.descricao as 'produto', concat(quantidade.peso, '-', quantidade.unidade) as 'quantidade', setor.descricao as 'setor', setor.id as 'idSetor', marca.descricao as 'marca', status FROM produto INNER JOIN quantidade on quantidade.id = produto.Quantidade_id INNER JOIN setor on setor.id = produto.Setor_id INNER JOIN produto_has_marca phm on produto.id = phm.Produto_id INNER JOIN marca on marca.id = phm.Marca_id";
=======
<<<<<<< HEAD
		$sql = "SELECT produto.id, produto.descricao as 'produto', concat(quantidade.peso, '-', quantidade.unidade) as 'quantidade', setor.descricao as 'setor', setor.id as 'idSetor', marca.descricao as 'marca', marca.id, status FROM produto INNER JOIN quantidade on quantidade.id = produto.Quantidade_id INNER JOIN setor on setor.id = produto.Setor_id INNER JOIN produto_has_marca phm on produto.id = phm.Produto_id INNER JOIN marca on marca.id = phm.Marca_id";
<<<<<<< HEAD
		if ($where != null) {$sql .= " WHERE $where;";}
=======
>>>>>>> 159b938b6661ba747df806a538adaf6792896493
		if ($where != null) {$sql .= " WHERE $where;$";}
=======
		$sql = "SELECT produto.id as 'codigo', produto.descricao as 'produto', concat(quantidade.peso, '-', quantidade.unidade) as 'quantidade', setor.descricao as 'setor', marca.descricao as 'marca' FROM produto INNER JOIN quantidade on quantidade.id = produto.Quantidade_id INNER JOIN setor on setor.id = produto.Setor_id INNER JOIN produto_has_marca phm on produto.id = phm.Produto_id INNER JOIN marca on marca.id = phm.Marca_id";
		if ($where != null) {$sql .= " WHERE $where;";}
>>>>>>> Giovani
>>>>>>> 5126c50979e3e3a1306be88b246aee35c8d4bf11
		return $this->execute_query($sql);
	}

	public function vinculaMarca($marca_id, $img) {
		return $this->execute_query("INSERT INTO produto_has_marca (id, Produto_id, Marca_id, img) VALUES (null, " . $this->id . ", " . $marca_id . ", " . $img . ");");
	}

<<<<<<< HEAD
	public function ativarProduto($id){
		//if ('status' != 0) {
			$sql = "UPDATE produto SET status = 1 WHERE id = $id";
		//}
		//else {$sql = "UPDATE produto SET status = 1 WHERE id = $id";}
		return $this->execute_query($sql);
=======
	public function deleteTables($idProduto) {
		return $this->execute_query("");
>>>>>>> 159b938b6661ba747df806a538adaf6792896493
	}

	public function listarSetor($where = null) {
		$sql = "SELECT id, setor.descricao as 'setor' FROM setor";
		if ($where != null) {$sql .= " WHERE $where;$";}
		return $this->execute_query($sql);
	}

}

?>
