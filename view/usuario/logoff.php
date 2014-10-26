<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

/*
 * 	Descrição do Arquivo
 * 	@author - João Ricardo Gomes dos Reis
 * 	@data de criação - 17/04/2014
 * 	@arquivo  - logoff.php
 */

session_start();

if($_GET["confirma"]=="SIM"){

	require_once("../../controller/usuario.controller.class.php");
	$login 	= new UsuarioMercado;

	$login->logoff();
	
}

?>
        
        <div class="control-group">
            <div class="controls" style="text-align:center">
              <a href="logoff.php?confirma=SIM" class="btn btn-success btn-large">Sim, desejo sair do sistema</a>&nbsp;&nbsp;
              <a href="../../index.php" class="btn btn-danger btn-large">Não desejo sair do sistema</a>
            </div>
		</div>

