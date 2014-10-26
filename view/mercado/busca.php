<?php
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
        <link href="../../css/load.css" rel="stylesheet">
        
        <style type="text/css">
        .loading {
			position:absolute;
			top:50%;
			left:55%;
			width:700px;
			height:300px;
			margin-left:-180px;
			margin-top:-130px;
			text-align:center;
				}
        </style>

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
        <br><br>
        <br><br>
        <br><br>
        <br>
        <div id="floatingCirclesG" class="loading">
        <div class="f_circleG" id="frotateG_01">
        </div>
        <div class="f_circleG" id="frotateG_02">
        </div>
        <div class="f_circleG" id="frotateG_03">
        </div>
        <div class="f_circleG" id="frotateG_04">
        </div>
        <div class="f_circleG" id="frotateG_05">
        </div>
        <div class="f_circleG" id="frotateG_06">
        </div>
        <div class="f_circleG" id="frotateG_07">
        </div>
        <div class="f_circleG" id="frotateG_08">
        </div>
        </div>

        <br><br>
        <div id="erros"></div>


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

<script type="text/Javascript">

function showPosition(position) {
	var pos = [];
	//pos[0] = position.coords.latitude;
	//pos[1] = position.coords.longitude;
    pos[0] = -21.9701160;
    pos[1] = -46.7821960;
    console.log(pos);
	$.ajax({
                type: "POST",
                url: "./sessionMercado.php",
                datatype: "html",
                data: {"position": pos},
                success: function(data) {
                    window.location.replace("./listagemMercados.php");
                }
    });
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            $("#erros").append("User denied the request for Geolocation.");
            break;
        case error.POSITION_UNAVAILABLE:
            $("#erros").append("Location information is unavailable.");
            break;
        case error.TIMEOUT:
            $("#erros").append("The request to get user location timed out.");
            break;
        case error.UNKNOWN_ERROR:
            $("#erros").append("An unknown error occurred.");
            break;
    }
}

$(document).ready(function(){
    if(navigator.geolocation){
	navigator.geolocation.getCurrentPosition(showPosition, showError, {enableHighAccuracy: true});
    }else{
        alert("Seu navegador não tem compatibilidade com geolocalização");
    }
});
</script>