<?php

class quantidade {
	private $id;
	private $peso;
	private $unidade;

	public function getId() {
		return $this->id;
	}

	public function getPeso() {
		return $this->peso;
	}
	public function getUnidade() {
		return $this->unidade;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setPeso($peso) {
		$this->peso = $peso;
	}

	public function setUnidade($unidade) {
		$this->unidade = $unidade;
	}

}

?>