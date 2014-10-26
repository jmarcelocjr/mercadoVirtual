<?php

//Inclui a classe genérica CRUD
require_once ("../../functions/crud.class.php");
require_once ("../../functions/functions.class.php");

class MercadoController extends Crud {

	//Método construtor

	public function __construct() {

		//Passa como parâmetro a tabela
		parent::__construct("mercado");
		
	}

	//Listagem de todas as mercado

	public function lista($where = null) {
		$query = "SELECT mercado.id, mercado.nome, mercado.endereco, mercado.Cidade_id, mercado.latitude, mercado.longitude FROM mercado";

		if($where != null){
			$query .= " WHERE $where;";
		}

		return $this->execute_query($query);
	}

	public function buscaMercadosProximos($latitude, $longitude, $distancia) {
		/*return $this->execute_query("SELECT id,
        ( 6371 * acos( cos( radians($latitude) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($longitude) ) + sin( radians($latitude) ) * sin( radians( latitude ) ) ) ) AS distance
        FROM mercado HAVING (distance <= $distancia)");
        */
		/*return $this->execute_query("SELECT id, (6371 * acos(cos(radians($latitude)) * cos(radians(latitude)) * cos(radians($longitude) - radians(longitude)) + sin(radians($latitude)) * sin(radians(latitude)))) AS distance FROM mercado HAVING (distance <= $distancia)");
		*/
		$functions	= new Functions;
		$mercados = $this->lista();
		$mercadosProximos = array();

		while ($mercado = mysqli_fetch_array($mercados)){
			$dist = $functions->distance($latitude, $longitude, $mercado[4], $mercado[5]);
			if($dist <= $distancia){
				array_push($mercadosProximos, $mercado);
			}
		}
		
		return $mercadosProximos;


	}

	
}

?>