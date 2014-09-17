<?php 

class Functions {
	
	
	public function converterSimNao($strItem) {
	
		if($strItem == 1){
			return "SIM";
		}else{
			return "NÃO";
		}
		
	}
	
	public function converterMoeda($strItem) {
	
		$moeda = str_replace(".",",",$strItem);
		return "R$ ".$moeda;
		
	}
	
	public function converterData($strData) {
	
		// Converte a data de dd/mm/aaaa para o formato: aaaa-mm-dd
		$strDataFinal = implode('-', array_reverse(explode('/',$strData)));
		return $strDataFinal;
	}
	
	public function converterDataPadrao($strData) {
	
		// Converte a data de aaaa-mm-dd para o formato: dd/mm/aaaa
		$strDataFinal = implode('/', array_reverse(explode('-',$strData)));
		return $strDataFinal;
	}
	
	public function converterDataHoraPadrao($strData) {
	
		$dataFinal = substr($strData,0,10);
		$horaFinal = substr($strData,11,5);
	
		// Converte a data de aaaa-mm-dd para o formato: dd/mm/aaaa
		$strDataFinal = implode('/', array_reverse(explode('-',$dataFinal)));
		
		return $strDataFinal." às ".$horaFinal;
	}
	
	
	public function geraMenu($usuario=0){
	
		$contextoDeMenu = "http://localhost/mercadovirtual";
		
		if($usuario!=0){
			
			$menu = "
			
					<ul class=\"nav\" style=\"bottom:15px;\">
					  <li><a href=\"".$contextoDeMenu."/view/home.php\">Home</a></li>


					  <li class=\"dropdown\">
						<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Usuários<b class=\"caret\"></b></a>
						<ul class=\"dropdown-menu\">
						  <li><a href=\"".$contextoDeMenu."/view/grupodeusuario/lista.php\">Gerenciar Grupos de Usuários</a></li>
						  <li><a href=\"".$contextoDeMenu."/view/usuario/lista.php\">Gerenciar Usuários</a></li>
						  <li><a href=\"".$contextoDeMenu."/view/logdeacesso/lista.php\">Gerenciar Log de Acesso</a></li>
						  <li><a href=\"".$contextoDeMenu."/view/tipodeusuario/lista.php\">Gerenciar Tipos de Usuários</a></li>
						</ul>
					  </li>


					  <li><a href=\"".$contextoDeMenu."/sobre.php\">Sobre</a></li>
					</ul>
			
					";
			
		}else{

			$menu = "
				
						<ul class=\"nav\" style=\"bottom:15px;\">
						  <!--<li><a href=\"".$contextoDeMenu."/view/home.php\">Home</a></li>-->
						  <li class=\"dropdown\">
							<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">TV Panel <b class=\"caret\"></b></a>
							<ul class=\"dropdown-menu\">
							  <li><a href=\"".$contextoDeMenu."/view/usuario/cadastro.php\"><i class=\"icon-plus\"></i> Cadastrar Usuário</a></li>
							  <li><a href=\"".$contextoDeMenu."/view/usuario/logoff.php?confirma=NAO\"><i class=\"icon-share\"></i> Sair do Sistema</a></li>
							  <!--
							  <li><a href=\"".$contextoDeMenu."/view/logdeacessodousuario/lista.php\"><i class=\"icon-list-alt\"></i> Gerenciar Log de Acesso</a></li>
							  <li><a href=\"".$contextoDeMenu."/view/cidade/lista.php\"><i class=\"icon-map-marker\"></i> Gerenciar Cidades</a></li>
							  -->
							  <li><a href=\"".$contextoDeMenu."/view/menu/lista.php\"><i class=\"icon-list\"></i> Gerenciar Menu</a></li>
							  <!--<li><a href=\"".$contextoDeMenu."/view/niveldeusuario/lista.php\"><i class=\"icon-filter\"></i> Gerenciar Níveis de Usuário</a></li>-->
							</ul>
						  </li>
						  <li class=\"dropdown\">
							<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Configurações <b class=\"caret\"></b></a>
							<ul class=\"dropdown-menu\">
							  <li><a href=\"".$contextoDeMenu."/view/tvweb/lista.php\"><i class=\"icon-film\"></i> Gerenciar TVweb</a></li>
							  <li><a href=\"".$contextoDeMenu."/view/empresa/lista.php\"><i class=\"icon-briefcase\"></i> Gerenciar Empresas</a></li>
							  <li><a href=\"".$contextoDeMenu."/view/profile/lista.php\"><i class=\"icon-eye-open\"></i> Gerenciar Profiles</a></li>
							</ul>
						  </li>
						  <li class=\"dropdown\">
							<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Usuários <b class=\"caret\"></b></a>
							<ul class=\"dropdown-menu\">
							  <li><a href=\"".$contextoDeMenu."/view/usuario/lista.php?t=1\"><i class=\"icon-ok-sign\"></i> Gerenciar Usuários Ativos</a></li>
							  <li><a href=\"".$contextoDeMenu."/view/usuario/lista.php?t=0\"><i class=\"icon-remove-sign\"></i> Gerenciar Usuários Inativos</a></li>
							  <li><a href=\"".$contextoDeMenu."/view/usuario/listadetalhada.php\"><i class=\"icon-user\"></i> Gerenciar Contas </a></li>
							</ul>
						  </li>
						  <li class=\"dropdown\">
							<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Financeiro <b class=\"caret\"></b></a>
							<ul class=\"dropdown-menu\">
							  <!--<li><a href=\"".$contextoDeMenu."/view/transacoes/lista.php\"><i class=\"icon-folder-open\"></i> Gerenciar Transações</a></li>-->
							  <li><a href=\"".$contextoDeMenu."/view/plano/lista.php\"><i class=\"icon-shopping-cart\"></i> Gerenciar Planos </a></li>
							</ul>
						  </li>
						  <!--<li><a href=\"".$contextoDeMenu."/sobre.php\">Sobre</a></li>-->
						</ul>
				
						";

		}
		
		echo $menu;	
		
	}
	
	
	public function mensagemDeRetorno($tipo,$acao){
	
		//Definir o tipo de erro, o ícone e a classe de estilo utilizada para a tela de alerta
		switch($tipo){
			case 1:
				$msgA = "SUCESSO";
				$icnA = "icone_sucesso.png";
				$classe = "alert-success";
			break;
	
			case 2:
				$msgA = "ERRO";
				$icnA = "icone-erro.png";
				$classe = "alert-error";
			break;
	
			case 3:
				$msgA = "FALHA";
				$icnA = "icone-aviso.png";
				$classe = "alert-block";
			break;
	
			case 4:
				$msgA = "AVISO";
				$icnA = "icone-aviso.png";
				$classe = "alert-info";
			break;
	
		}
			
	
		switch($acao){
			case 1:
				$msgB = "cadastro";
			break;
	
			case 2:
				$msgB = "alteração";
			break;
	
			case 3:
				$msgB = "exclusão";
			break;
	
			case 4:
				$msgB = "logon";
			break;
	
			case 5:
				$msgB = "autenticação";
			break;
	
			case 6:
				$msgB = "pesquisa";
			break;
	
			case 7:
				$msgB = "upload de arquivo";
			break;
	
		}
	
		$mensagem = "
					<p>&nbsp;</p>
					<div class=\"alert alert-block ".$classe." fade in\">
						<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
						<h4 class=\"alert-heading\">".$msgA."</h4>
						<p>Ao realizar a operação de ".$msgB.".</p>
					</div>
					<p>&nbsp;</p>
					";		
	
		echo $mensagem;
	}


}
?>