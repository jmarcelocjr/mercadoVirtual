<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

/*
 * 	Descrição do Arquivo
 * 	@author - João Ricardo Gomes dos Reis
 * 	@data de criação - 17/04/2014
 * 	@arquivo  - login.php
 */

if (isset($_POST["email"]) ||  isset($_POST["senha"])){
   
   	require_once("../../controller/usuario.controller.class.php");
	  
	$usuarioController = new UsuarioController;
	  
	$result = $usuarioController->autentica($_POST['email'],$_POST['senha']);
	$quantidadeDeDados = mysql_num_rows($result);
	
	if ($quantidadeDeDados == '1') {
          
		$usuario = mysql_fetch_array($result);
		
		if($usuario["ativo"] == 0 or $usuario["valido"] == 0){
			
			//Aviso, redireciona para a tela de login novamente
			header("Location: login.php?tipo=4&acao=5");
			
		}else{

			
			//Declara as variáveis de sessão que serão utilizadas no sistema
			session_start();
			
			$_SESSION["id_usuario"]			= $usuario["id"];
			$_SESSION["nomedousuario"] 		= $usuario["nome"];
			$_SESSION["email"] 				= $usuario["email"];
			$_SESSION["id_niveldeusuario"] 	= $usuario["id_niveldeusuario"];
			$_SESSION["ativo"] 				= $usuario["ativo"];
			$_SESSION["valido"]				= $usuario["valido"];
	
			//Sucesso, redireciona para a tela principal
			header("Location: ./index.php");
			
		}
		
	}else{
		//Falha, redireciona para a tela de login novamente
		header("Location: login.php?tipo=3&acao=5");
	}
	
}

?>
<link type="text/css" href="../../css/bootstrap.css">

<div class="col md-offset6">
      <form class="form-signin" id="login-form"  method="post">
            <fieldset>
            
                <div class="control-group">
                    <div class="controls">
                        <img src="../../img/logo_tanbook.png" alt="" style="width:200px;">
                        <p>&nbsp;</p>
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <input type="text" class="input-block-level" name="email" id="email" placeholder="Login" style="width:20%;">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="password" class="input-block-level" name="senha" id="senha" placeholder="Senha" style="width:20%;">
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-info btn-large">Logar</button>
                </div>
                <div class="control-group">
                    <div class="controls">
                    	<p>&nbsp;</p>
                		<a>Esqueceu sua senha?</a> | <a href="cadastro.php">Cadastre-se</a>
					</div>
                </div>
            </fieldset>

          </form>
    </div>
