<?php

//require_once ("../controller/produto.controller.class.php");
include_once("../../functions/functions.class.php");

$functions	= new Functions;

//$produto = new produtoController;




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
	<?php include_once ('../menu.php')?>
</div>
    
  <div class="container">
  
  <div id="conteudo">

<!-- Conteudo -->
<div class="header" id="header1">
<h1 class="top">Mercado 1</h1>
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
					<tr class="pexistente">
					<td>Danone JMC-Junior</td>
					<td>R$ 1,99</td>
					<td>1</td>
					</tr>
					
					<tr class="pinexistente">
					<td>Detergente Ype</td>
					<td>R$ 299,99</td>
					<td>20</td>
					</tr>
				</tbody>
				
				</table>

        </p>

    </div>
</div>
<div class="back">Total do mercado: R$</div>
<button type="button" class="btn btn-default">Selecionar Mercado</button>
</div>
  
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
<?php include_once ('../rodape.php')?>
</footer>


         <!-- Javascript -->
		<script src="../js/jquery.js"></script>
        <script src="../js/jquery.validate.min.js"></script>
        <script src="../js/bootstrap-transition.js"></script>
        <script src="../js/bootstrap-alert.js"></script>
        <script src="../js/bootstrap-modal.js"></script>
        <script src="../js/bootstrap-dropdown.js"></script>
        <script src="../js/bootstrap-scrollspy.js"></script>
        <script src="../js/bootstrap-tab.js"></script>
        <script src="../js/bootstrap-tooltip.js"></script>
        <script src="../js/bootstrap-popover.js"></script>
        <script src="../js/bootstrap-button.js"></script>
        <script src="../js/bootstrap-collapse.js"></script>
        <script src="../js/bootstrap-carousel.js"></script>
        <script src="../js/bootstrap-typeahead.js"></script>
</body>
</html>

