<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

include_once("./functions/functions.class.php");

$functions	= new Functions;

?>
<!DOCTYPE html>
<html>
<head>


	<meta charset="ISO-8859-1">

        <title>Inicio - Mercado Virtual</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <!-- Estilos -->
        <link href="./css/bootstrap.css" rel="stylesheet">
        <link href="./css/geral.css" rel="stylesheet">
        <link href="./css/validation.css" rel="stylesheet">
        <link href="./css/bootstrap-responsive.css" rel="stylesheet">
        <link href="./css/estilo-index.css" rel="stylesheet">
	
</head>
<body>
<?php
include_once("./view/menu.php");
?>
<br>
<br>
	<div id="conteudo" name="conteudo">
		<h1 class="titulo">Seja bem vindo ao</h1>
		<br><img class="imagem" src="./img/logo_tanbook.png">
		<h2 class="titulo">O modo f�cil e digital de fazer sua lista de compras!</h2>

		<br><button class="btn btn-primary btn-large imagem" name="botao">Fa�a j� sua lista!
		<script language= "JavaScript">
		document.conteudo.botao.onclick = function() {
		location.href="./view/produto/lista.php";
		}
		</script>
		</button>
		<br>
		<br>
		<br>
		<br>
	</div>
	
<?php
include_once("./view/rodape.php");
?>

		<!-- Javascript -->
        <script src="../../js/jquery.js"></script>
        <script src="../../js/jquery.validate.min.js"></script>
        <script src="../../js/bootstrap-transition.js"></script>
        <script src="../../js/bootstrap-alert.js"></script>
        <script src="../../js/bootstrap-modal.js"></script>
        <script src="../../js/bootstrap-dropdown.js"></script>
        <script src="../../js/bootstrap-scrollspy.js"></script>
        <script src="../../js/bootstrap-tab.js"></script>
        <script src="../../js/bootstrap-tooltip.js"></script>
        <script src="../../js/bootstrap-popover.js"></script>
        <script src="../../js/bootstrap-button.js"></script>
        <script src="../../js/bootstrap-collapse.js"></script>
        <script src="../../js/bootstrap-carousel.js"></script>
        <script src="../../js/bootstrap-typeahead.js"></script>
        
</body>
</html>