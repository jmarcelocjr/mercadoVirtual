<?php

//require_once ("../controller/produto.controller.class.php");
include_once("../functions/functions.class.php");

$functions	= new Functions;

//$produto = new produtoController;




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Comparação entre Mercados</title>
<!-- Estilos -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/geral.css" rel="stylesheet">
<link href="../css/validation.css" rel="stylesheet">
<link href="../css/bootstrap-responsive.css" rel="stylesheet">
<style>


body{
	margin: 0px;
	padding: 0px;	
}

.header{
	float:left;
	width:33%;
	height:50px;
}

.top{
	height:25px;
	font-size:22px;
	font-weight:bold;	
	width:100%;
	font-family:Arial, Helvetica, sans-serif;
}

.back{
	height:25px;
	font-size:22px;
	font-weight:bold;	
	width:100%;
	font-family:Arial, Helvetica, sans-serif;
}

.geral{
	height:300px;
	overflow-y:auto;
}

.box{
	float:left;
	width:98%;
	border: 1px dashed #666;	
}

.box:hover{
	background-color:#FF0;
	cursor:context-menu;
}

.titulo{
	color:#000;
	font-size:22px;
	font-weight:bold;	
	width:100%;
	font-family:Arial, Helvetica, sans-serif;
	text-align:center;
}

.conteudo{
	color:#000;
	font-size:11px;
	width:100%;
}

.rodape{
	color:#000;
	font-size:14px;
	width:100%;
	text-align:center;
	font-weight:bold;
}

@media screen and (max-width: 400px) {
	.box{
		float:left;
		width:100%;
		border: 1px dashed #666;	
	}
}
</style> 
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

<!-- Conteudo -->
<div class="header" id="header1">
<h1 class="top">Mercado 1</h1>
<div class="geral" id="geral1">
    <div class="box" id="box_1">
        <div class="titulo" id="titulo_1">Teste 1</div>
        <div class="conteudo" id="conteudo_1">Produto 1</div>
        <div class="rodape" id="rodape_1">Adicionar</div>
    </div>
</div>
<div class="back">Total 1</div>
</div>
  

<button type="button" class="btn btn-default">
  <span class="icon-chevron-left"></span> Voltar ao Carrinho
</button>
<button type="button" class="btn btn-default pull-right">Avan&ccedil;ar
  <span class="icon-chevron-right"></span> 
</button>
    
</div>
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
<?php
include_once("rodape.php");
?>
