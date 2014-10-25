<?php
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

require_once ("../../controller/preco.controller.class.php");
require_once("../../functions/functions.class.php");
require_once("../../controller/mercado.controller.class.php");
require_once("../../controller/produto.controller.class.php");

session_start();

$functions	= new Functions;
$preco = new PrecoController;
$mercadoController = new MercadoController;
$produtoController = new ProdutoController;

$listaProdutos = $preco->comparaLista($_SESSION['produtos'], $_SESSION['mercados']);
print_r($listaProdutos);
?>

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comparação entre Mercados</title>
<!-- Estilos -->
<link href="../../css/bootstrap.css" rel="stylesheet">
<link href="../../css/geral.css" rel="stylesheet">
<link href="../../css/validation.css" rel="stylesheet">
<link href="../../css/bootstrap-responsive.css" rel="stylesheet">
<link href="../../css/estilo-lista-mercados.css" rel="stylesheet">
</head>

<body>

<div id="menu">
	<?php include_once ('../menu.php');?>
</div>
    
  <div class="container">
  
  <div id="conteudo">

<!-- Conteudo -->
<?php 
if(array_filter($listaProdutos)){
for ($i = 0; $i < sizeof($listaProdutos); $i++ ) { 
	$mercado = $mercadoController->lista("mercado.id = " . $listaProdutos[$i][0][0]);
	$mercado = mysqli_fetch_row($mercado);
?>
<div class="header" id="header1">
<h1 class="top"><?= $mercado[1]; ?></h1>
<img src="../../img/sempre-vale.png" style="width:100px; height:100px; "/>
<div class="geral" id="geral1">
    <div class="box" id="box_1">
        <p class="conteudo" id="conteudo_1"></p>
        	<table class="table table-hover">
				<thead>
					<tr>
					<th>Produto</th>
					<th>Valor</th>
					<th>Quantidade</th>
					</tr>
				</thead>
				
				<tbody>
					<!-- pexistente / pinexistente -->
					
					<?php foreach($listaProdutos[$i] as $produto) { 
						$produtoNome = $produtoController->lista("phm.id = " . $produto[1]);
						$produtoNome = mysqli_fetch_row($produtoNome);
						?>
					<tr class=
					"<?= ($produto[sizeof($produto) -1] == 'true') ? 'pexistente' : 'pinexistente'; ?>">
					<td><?= $produtoNome[1] . " - " . $produtoNome[2] . " - " . $produtoNome[5]; ?></td>
					<td>R$ <?= ($produto[sizeof($produto) -1] == 'true') ? $produto[2] : '0'; ?></td>
					<td><?= $produto[sizeof($produto) -2]; ?></td>
					</tr>
					<?php } ?>
				</tbody>
				
				</table>

        </p>

    </div>
</div>
<div class="back">Total do mercado: R$ <?= $preco->calculaPrecoTotal($listaProdutos[$i]); ?></div>
<button type="button" class="btn btn-default">Selecionar Mercado</button>
</div>
<?php }
}else{
?>
	<div class="text-center">
		<h2>Que pena!!</h2>
		<p>Nenhum mercado foi encontrado perto de sua localização! =(</p>
	</div>


<?php } ?>
  
<nav style="clear:both; padding: 10px 10px 10px 10px;">
<button type="button" class="btn btn-default">
  <span class="icon-chevron-left"></span> Voltar ao Carrinho
</button>
<button type="button" class="btn btn-default pull-right">Avan&ccedil;ar
  <span class="icon-chevron-right"></span> 
</button>
</nav>



</div>
</div>


<footer style="clear:both !important;" id="rodape">
<?php include_once ('../rodape.php');?>
</footer>


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