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
$listaProdutos = array();
if (isset($_SESSION['idProdutos'])) {
	foreach ($_SESSION['idProdutos'] as $idProduto) {
		array_push($listaProdutos, $produto->lista("produto.id = " . $idProduto));
	}
}

//Instanciando a classe de funções
$functions = new Functions;

?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Meu Carrinho</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Estilos -->
        <link href="../../css/bootstrap.css" rel="stylesheet">
        <link href="../../css/geral.css" rel="stylesheet">
        <link href="../../css/validation.css" rel="stylesheet">
        <link href="../../css/bootstrap-responsive.css" rel="stylesheet">

    </head>


    <body>

<?php include_once ("../menu.php");?>
<div class="container">

        <!-- Título -->
        <blockquote>
          <h2>Meu carrinho</h2>
          <small>Altere a quantidade ou remova os produtos</small>
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

<?php
if (array_filter($listaProdutos)) {
	?>
<!-- Lista -->

<table class="table table-hover">
<thead>
<tr>
<th>Produto</th>
<th>Setor</th>
<th>Quantidade</th>
<th style="text-align:center"><i class="icon-remove"></i></th>
</tr>
</thead>
<tbody>
<?php
$i = 1;
	foreach ($listaProdutos as $produto) {
		$produto = mysqli_fetch_array($produto);
		?>
<tr>
<td><?=$produto["produto"] . " - " . $produto['quantidade'] . " - " . $produto['marca']?></td>
<td><?=$produto["setor"];?></td>
<td ><button type="button" class="incrementa" id=<?="incrementa_" . $produto['codigo']?>>+</button><input type="text" id=<?="quantidade_" . $produto['codigo']?> name=<?="quantidadeProduto_" . $produto['codigo']?> value="1" disabled="true"><button type="button" class="decrementa" id=<?="decrementa_" . $produto['codigo']?>>-</button></td>
<td style="text-align:center"><a class="btn btn-small" type="button" onClick="removeItem(<?=$produto['codigo']?>, this);" href="#"><i class="icon-remove">x</i></a></td>
</tr>
<?php
}
	?>
</tbody>
</table>
<br><br>
<button type="button" name="compararCarrinho" onClick="">Comparar itens</button>
<?php
} else {
	?>
<div class="text-center">
                <h2>Opa!!</h2>
                <p>Nenhum item foi adicionado ao carrinho!</p>
            </div>

<?php
}
?>
<hr>



    </div> <!-- /container -->
<footer>
<?php include_once ("../rodape.php");?>
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
(function($) {

    removeItem = function(id, handler) {
        $.ajax({
                type: "POST",
                url: "./sessionRemove.php",
                datatype: "html",
                data: {"idProduto": id},
                success: function(data) {
                    var tr = $(handler).closest('tr');
                    tr.fadeOut(400, function(){
                        tr.remove();
                    });
                    return false;
                }
            });
    comparaProduto = function(id, handler) {
    $.ajax({
                type: "POST",
                url: "./sessionCompara.php",
                datatype: "html",
                data: {"idProduto": id},
                success: function(data) {
                    var tr = $(handler).closest('tr');
                    tr.fadeOut(400, function(){
                        tr.remove();
                    });
                    return false;
                }
            });
  };
})(jQuery);

$(document).ready(function(){
    $(".incrementa").click(function(){
        var id = $(this).attr('id');
        var numsStr = id.replace(/[^0-9]/g,'');
        id = parseInt(numsStr);
        var valor = parseInt($("#quantidade_" + id).val());
        valor += 1;
        $("#quantidade_" + id).val(valor);
    });
    $(".decrementa").click(function(){
        var id = $(this).attr('id');
        var numsStr = id.replace(/[^0-9]/g,'');
        id = parseInt(numsStr);
        var valor = parseInt($("#quantidade_" + id).val());
        if(valor > 1){
            valor -= 1;
        };
        $("#quantidade_" + id).val(valor);
    });
});


</script>