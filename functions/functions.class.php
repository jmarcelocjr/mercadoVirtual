<?php

class Functions {

	public function converterSimNao($strItem) {

		if ($strItem == 1) {
			return "SIM";
		} else {
			return "NÃO";
		}

	}

	public function converterMoeda($strItem) {

		$moeda = str_replace(".", ",", $strItem);
		return "R$ " . $moeda;

	}

	public function converterData($strData) {

		// Converte a data de dd/mm/aaaa para o formato: aaaa-mm-dd
		$strDataFinal = implode('-', array_reverse(explode('/', $strData)));
		return $strDataFinal;
	}

	public function converterDataPadrao($strData) {

		// Converte a data de aaaa-mm-dd para o formato: dd/mm/aaaa
		$strDataFinal = implode('/', array_reverse(explode('-', $strData)));
		return $strDataFinal;
	}

	public function converterDataHoraPadrao($strData) {

		$dataFinal = substr($strData, 0, 10);
		$horaFinal = substr($strData, 11, 5);

		// Converte a data de aaaa-mm-dd para o formato: dd/mm/aaaa
		$strDataFinal = implode('/', array_reverse(explode('-', $dataFinal)));

		return $strDataFinal . " às " . $horaFinal;
	}

	public function geraMenu($usuario = 0) {

		$contextoDeMenu = "http://localhost/mercadoVirtual";

		if ($usuario == 0) {
			//Usuário
			$menu = "
					<ul class=\"nav\" style=\"bottom:15px;\">
						<li><a href=\"" . $contextoDeMenu . "/index.php\">Mercado Virtual</a></li>

						<li><a href=\"" . $contextoDeMenu . "/view/produto/lista.php\">Produtos</a></li>

						<li><a href=\"" . $contextoDeMenu . "/view/produto/carrinho.php\">Meu Carrinho</a></li>

						<li><a href=\"" . $contextoDeMenu . "/view/ajuda.php\">Ajuda</a></li>
						<li><a href=\"" . $contextoDeMenu . "/view/usuario/login.php\">Acesso ao Sistema</a></li>




					";

		} elseif ($usuario == 1) {
			//Funcionário

			$menu = "
					<li class=\"dropdown\">
						<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Usuários<b class=\"caret\"></b></a>
						<ul class=\"dropdown-menu\">
							<li><a href=\"" . $contextoDeMenu . "/view/grupodeusuario/lista.php\">Gerenciar Grupos de Usuários</a></li>
							<li><a href=\"" . $contextoDeMenu . "/view/usuario/lista.php\">Gerenciar Usuários</a></li>
							<li><a href=\"" . $contextoDeMenu . "/view/logdeacesso/lista.php\">Gerenciar Log de Acesso</a></li>
							<li><a href=\"" . $contextoDeMenu . "/view/tipodeusuario/lista.php\">Gerenciar Tipos de Usuários</a></li>
							<li><a href=\"" . $contextoDeMenu . "/view/usuario/login.php\">Acesso ao Sistema</a></li>


						</ul>
					</li>
					<form class=\"navbar-form pull-left\">
						  <input type=\"text\" class=\"span2\">
						  <button type=\"submit\" class=\"btn\">Submit</button>
					</form>
					";

		} elseif ($usuario == 2) {
			//Mercado
		} elseif ($usuario == 3) {
			//Admin
		}

		echo $menu;

	}

	public function mensagemDeRetorno($tipo, $acao) {

		//Definir o tipo de erro, o ícone e a classe de estilo utilizada para a tela de alerta
		switch ($tipo) {
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

		switch ($acao) {
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
					<div class=\"alert alert-block " . $classe . " fade in\">
						<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
						<h4 class=\"alert-heading\">" . $msgA . "</h4>
						<p>Ao realizar a operação de " . $msgB . ".</p>
					</div>
					<p>&nbsp;</p>
					";

		echo $mensagem;
	}

}
?>