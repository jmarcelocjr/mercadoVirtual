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

$functions  = new Functions;
$preco = new PrecoController;
$mercadoController = new MercadoController;
$produtoController = new ProdutoController;

$listaProdutos = $preco->comparaLista($_SESSION['produtos'], $_SESSION['mercados']);
$id = $_GET['id'];
$mercado = $mercadoController->lista("mercado.id = " . $id);
$mercado = mysqli_fetch_row($mercado);
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

    </head>


    <body>

<div id="menu">
<?php include_once ('../menu.php');?>
</div>

<div class="container">

        <!-- Título -->
        <blockquote>
          <h2><?= $mercado[1];?></h2>
          <h5><?="Distância de " . $functions->distance($_SESSION['coordenadas'][0], $_SESSION['coordenadas'][1], $mercado[4], $mercado[5]) . "Km."; ?></h5>
        </blockquote>
        <article>
        
        </article>

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
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

    </body>
</html>

<script>
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
var map;
var latlngEu;
var latlngMercado;

function success(position) {
    directionsDisplay = new google.maps.DirectionsRenderer();
    var mapcanvas = document.createElement('div');
        mapcanvas.id = 'mapcanvas';
        mapcanvas.style.height = '400px';
        mapcanvas.style.width = '560px';

    document.querySelector('article').appendChild(mapcanvas);

    latlngEu = new google.maps.LatLng(
        <?=$_SESSION['coordenadas'][0]?>, <?=$_SESSION['coordenadas'][1]?>);

    latlngMercado = new google.maps.LatLng(<?= $mercado[4]; ?>, <?= $mercado[5]; ?>);

    var myOptions = {
        zoom: 15,
        center: latlngEu,
        mapTypeControl: false,
        navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
        mapTypeId: google.maps.MapTypeId.TERRAIN
    };

    map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
    directionsDisplay.setMap(map);
    var markerEu = new google.maps.Marker({
        position: latlngEu,
        animation:google.maps.Animation.BOUNCE,
        title:"Você está aqui!"
    });
    var markerMercado = new google.maps.Marker({
        position: latlngMercado,
        title: "<?= $mercado[1]; ?>"
    });
    markerEu.setMap(map);
    markerMercado.setMap(map);
    route();
}

function route() {

var start = latlngEu;
var end = latlngMercado;
var request = {
origin:start,
destination:end,
travelMode: google.maps.TravelMode.WALKING
 };
 directionsService.route(request, function(result, status) {
if (status == google.maps.DirectionsStatus.OK) {
  directionsDisplay.setDirections(result);
} else { alert("couldn't get directions:"+status); }
});
} 

if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(success);
} else {
    error('Seu navegador não suporta <b style="color:black;background-color:#ffff66">Geolocalização</b>!');
}

</script>