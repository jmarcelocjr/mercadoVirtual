<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//Importanto as classes externas
include_once ("../../functions/functions.class.php");
session_start();

//Instanciando a classe controladora

//Instanciando a classe de funções
$functions = new Functions;

?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Bucando Mercados...</title>
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

<div id="menu">
<?php include_once ('../menu.php');?>
</div>

<div class="container">

        <!-- Título -->
        <blockquote>
          <h2>Buscando Mercados...</h2>
          <small>Aguarde enquanto procuramos os mercados mais próximos de sua localização</small>
        </blockquote>
		<input type="hidden" id="latitude" value=""/><input type="hidden" id="longitude" value=""/>




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
        <script src="../../js/georeferenciamento.js"></script>

    </body>
</html>

<script type="text/Javascript">

function showPosition(position) {
	var pos = [];
	pos[0] = position.coords.latitude;
	pos[1] = position.coords.longitude;

	$.ajax({
                type: "POST",
                url: "./sessionMercado.php",
                datatype: "html",
                data: {"position": pos},
                success: function(data) {
                    alert(data);
                }
    });
}

$(document).ready(function(){
	navigator.geolocation.getCurrentPosition(showPosition);

});
</script>