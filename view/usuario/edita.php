<?php 
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

/*
 * 	Descrição do Arquivo
 * 	@author - João Ricardo Gomes dos Reis
 * 	@data de criação - 01/04/2014
 * 	@arquivo  - edita.php
 */
 
require_once("../../controller/usuario.controller.class.php");
require_once("../../model/usuario.class.php");

session_start();

$controller = new UsuarioController();
$usuario 	= new Usuario();

if(isset($_POST['submit'])) {

	$usuario->setId($_POST['id']);
	$usuario->setNomeDoUsuario($_POST['nome']);
	$usuario->setEmail($_POST['email']);
	$usuario->setSenha($_POST['senha']);
	$usuario->setIdNivelDeUsuario($_POST['id_niveldeusuario']);
	$usuario->setEmail($_POST['ativo']);

	if($usuario->getId() > 0){
		$controller->update($usuario, 'id');
	}else{
		$controller->save($usuario, 'id');
	}
	header('Location: lista.php');
}


if(isset($_SESSION["id_usuario"])){
	$usuario = $controller->loadObject($_SESSION["id_usuario"], 'id');
}


$usuarios = $controller->listObjects();


?>

  <form class="form-horizontal" id="contact-form" action="edita.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" id="id" value="<?php echo ($usuario->getId() > 0 ) ? $usuario->getId() : ''; ?>">
    <div class="control-group">
      <label class="control-label" for="nome">Nome</label>
      <div class="controls">
        <input class="input-xlarge" type="text" name="nome" id="nome" required value="<?php echo ($usuario->getId() > 0 ) ? $usuario->getNomeDoUsuario() : ''; ?>">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input class="input-xlarge" type="text" name="email" id="email" required value="<?php echo ($usuario->getId() > 0 ) ? $usuario->getEmail() : ''; ?>">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="senha">Senha</label>
      <div class="controls">
        <input class="input-xlarge" type="password" name="senha" id="senha" required value="<?php echo ($usuario->getId() > 0 ) ? $usuario->getSenha() : ''; ?>">
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="id_niveldeusuario">Nível de Usuário</label>
      <div class="controls">
        <select class="input-xlarge" name="id_niveldeusuario" id="id_niveldeusuario">
        	
        </select>
      </div>
    </div>
  
    <div class="control-group">
      <div class="controls">
        <input type="submit" class="btn btn-info btn-large" value="Salvar" name="submit">
      </div>
    </div>
  </form>
