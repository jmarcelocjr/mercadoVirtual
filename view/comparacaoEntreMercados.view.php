<?php

require_once ("../controller/produto.controller.class.php");
include_once("../functions/functions.class.php");

$functions	= new Functions;

$produto = new produtoController;




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ComparaÃ§Ã£o entre Mercados</title>
<!-- Estilos -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/geral.css" rel="stylesheet">
<link href="../css/validation.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.css" rel="stylesheet"> 
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img class="brand" src="../img/assinatura_tanbook.png" alt="" style="width:200px;">
          <div class="nav-collapse collapse">

			<?php
                $functions->geraMenu();
            ?>

          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  </div>
    
  <div class="container">
  
  <div id="conteudo">
  
  	<table>
  		<thead>
  			<th>Descrição</th>
  			<th>Quantidade</th>
  		</thead>
  		<tbody>
  			<?php 
  				$mercado = 2;
  				$registros = $produto->$listaMercado($mercado);
  				while ($reg = mysql_fetch_array($registros)){
  			?>
  			
  			<tr>
  				<td><?php echo $reg["descricao"] ?></td>
  				<td><?php echo $reg["quantidade"] ?></td>
  			</tr>
  			
  			<?php 
}
  			?>
  		</tbody>
  	</table>
  
  </div>
  
<button type="button" class="btn btn-default">
  <span class="icon-chevron-left"></span> Voltar ao Carrinho
</button>
<button type="button" class="btn btn-default pull-right">Avan&ccedil;ar
  <span class="icon-chevron-right"></span> 
</button>
</div>
    






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
