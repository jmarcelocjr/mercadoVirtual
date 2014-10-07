<?php

/*
 * 	Descrição do Arquivo
 * 	@author João Ricardo Gomes dos Reis
 * 	@data de criação - 17/04/2014
 * 	@arquivo - usuario.controller.class.php
 * 
 */

//Inclui a classe genérica CRUD
require_once(__DIR__ . "/../functions/crud.class.php");

class UsuarioController extends Crud {

	//Método construtor

    public function __construct() {
		
		//Passa como parâmetro a tabela
        parent::__construct("usuario");
    }
	
	
	//Listagem com Nível de Usuário
	
	public function lista(){
		return $this->execute_query("SELECT usuario.id, usuario.login, usuario.senha, usuario.ativo, usuario.nivel, usuario.mercado_id FROM usuario INNER JOIN mercado ON mercado.id = usuario.mercado_id WHERE usuario.ativo = 1  ;" );
	}
	
	
	//Método de Autenticação
	
	public function autentica($login,$senha){
		return $this->execute_query("SELECT * FROM usuario WHERE login = '" . addslashes($login) . "' AND senha = '" . addslashes($senha) . "' ;" );
	}
	
	//Método de Logoff
	
	public function logoff(){
		
		session_start();
		
		$_SESSION["id"]			= NULL;
		$_SESSION["login"] 		= NULL;
		$_SESSION["senha"] 				= NULL;
		$_SESSION["mercado_id"] 	= NULL;
		$_SESSION["ativo"] 				= NULL;
		$_SESSION["nivel"]				= NULL;
		
		session_unset();
		session_destroy();

		//Sucesso, redireciona para a tela principal
		header("Location: login.php");
		
	}
	
}

?>