<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//Importanto as classes externas
require_once ("../../controller/produto.controller.class.php");
include_once ("../../functions/functions.class.php");
session_start();

//Instanciando a classe controladora
$produto = new ProdutoController;
$registros = $produto->lista();

//Instanciando a classe de funções
$functions = new Functions;

//Verificando se está sendo passado algum id por parâmetro
//para o caso de exclusão de algum item
$id = (isset($_GET['id'])) ? $_GET['id'] : 0;

//Caso algum id tenha sido recebido, passa ele como parâmetro
//para o método de remoção de item
if ($id > 0) {
	$load = $produto->remove($id, 'id');
	header('Location: lista_produtos.php?acao=3&tipo=1');
}

?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Produtos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Estilos -->
        <link href="../../css/bootstrap.css" rel="stylesheet">
        <link href="../../css/geral.css" rel="stylesheet">
        <link href="../../css/validation.css" rel="stylesheet">
        <link href="../../css/bootstrap-responsive.css" rel="stylesheet">
        <link href="../../css/estilo-lista-produtos.css" rel="stylesheet">

    </head>


    <body>

<div id="menu">
<?php include_once ('../menu.php');?>
</div>


    <div class="container">

        <!-- Título -->
        <blockquote>
          <h2>Listagem de Produtos</h2>
          <small>Selecione os produtos desejados</small>
        </blockquote>


        <!-- Mensagem de Retorno -->
<?php
if (!empty($_GET["tipo"])) {
	?>
<section id="aviso">
<?php
$functions->mensagemDeRetorno($_GET["tipo"], $_GET["acao"]);
	?>
</section>
<?php
}
?>
<hr>
<!-- Lista -->
   <div id="geral">

<?php
if ($registros) {
	
	while ($reg = mysqli_fetch_array($registros)) {
        $id = $reg['codigo'];
		?>
    <div class="box" id=<?="box_" . $id?>>

        <img src= <?= "../../img/produto_" . $id . ".jpg"; ?> class="img-rounded padraoImagem"> <br/><br/>
        <div class="conteudo" id=<?="conteudo_" . $id?>>
<?=$reg["produto"] . " - " . $reg["marca"]." ";?><br>
<?=$reg["quantidade"];?>



     <br/><br/>
	  </div>
        <div>
          <button type="button" class="btn btn-default adc" id=<?=$id ?>>
             <span class="icon-shopping-cart"></span> Adicionar
          </button>
          <button type="button" class="btn btn-default comp" id="botao2">
             <span class="icon-resize-small"></span>Comparar
          </button>
             </div>
    </div>


<?php
	}
	?>

<?php
} else {
	?>
<div class="text-center">
                <h2>Opa!!</h2>
                <p>Sua pesquisa não retornou nenhum resultado válido.</p>
            </div>

<?php
}
?>
<hr>
   </div>
    </div> <!-- /container -->

    <footer id="rodape">
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

<script type="text/javascript">
$(document).ready(function() {


    $("button[class='btn btn-default adc']").click(function() {
            var idInput = $(this).attr('id');
            var id = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: "./sessionAdiciona.php",
                datatype: "html",
                data: {"idProduto": id},
                success: function(data) {
                   alert(data);
                }
            });

    });


});
</script>