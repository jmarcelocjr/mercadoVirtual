<?php
class Connection {
	private $connection;
//Local DB
<<<<<<< HEAD
	private $parameters = array("host" => "localhost", "user" => "root", "password" => "mohrole1", "database" => "mercadovirtual");
=======
<<<<<<< HEAD
	private $parameters = array("host" => "localhost", "user" => "root", "password" => "", "database" => "mercadovirtual");
=======
	private $parameters = array("host" => "localhost", "user" => "root", "password" => "", "database" => "mercadoVirtual");
>>>>>>> Giovani
>>>>>>> 5126c50979e3e3a1306be88b246aee35c8d4bf11
	public function openConnection() {
		$this->connection = mysqli_connect($this->parameters["host"], $this->parameters["user"], $this->parameters["password"]);
		if (!$this->connection) {
			die("Erro ao estabelecer conexão com a base de dados");
		} else {
//echo "Abriu conexão";
			$this->selectDatabase();
		}
	}
	private function selectDatabase() {
		$database = mysqli_select_db($this->connection, $this->parameters["database"]);
		if (!$database) {
			die("Base de dados não encontrada");
		} else {
//echo "Selecionou DB";
		}
		mysqli_query($this->connection, "SET NAMES 'utf8'");
		mysqli_query($this->connection, 'SET character_set_connection=utf8');
		mysqli_query($this->connection, 'SET character_set_client=utf8');
		mysqli_query($this->connection, 'SET character_set_results=utf8');
	}
	public function getConnection() {
		return $this->connection;
	}
	public function closeConnection() {
		mysqli_close($this->connection);
//echo "Fechou conexão";
	}
}
?>
