<!DOCTYPE html>
<?php

require_once("../../functions/connection.class.php");



?>

<html>
<head>
	<meta charset="utf-8">
	 	<link href="../../css/bootstrap.css" rel="stylesheet">
        <link href="../../css/geral.css" rel="stylesheet">
        <link href="../../css/validation.css" rel="stylesheet">
        <link href="../../css/bootstrap-responsive.css" rel="stylesheet"> 
	
	<title>Cadastro</title>
	
</head>
<body>

<?php 
include_once ("../../functions/functions.class.php");
session_start();

$functions = new Functions;

include_once ('../menu.php');
?>

<br>
<center>
<form class="form-horizontal">
  <div class="control-group">
  <fieldset style="width : 50%">
  	
  
  <legend>Informações do Mercado</legend>
  	<label class="control-label" for="inputEmail">Nome :</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Nome">
    </div>
    <label class="control-label" for="inputEndereco">Endereço :</label>
    <div class="controls">
      <input type="text" id="inputEndereco" placeholder="Endereço">
    
  </div>  <br><br>
  	<label class="control-label" for="inputEmail">Usuario :</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Usuario">
    </div>
  
  <div class="control-group">
    <label class="control-label" for="inputPassword">Senha :</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Senha">

      </div>
      
      <div class="control-group">
    <div class="controls"style="width : 21%;position: absolute; 
  left: 38%; top: 50%;">
      <button type="submit" class="btn btn-inverse">Cadastrar</button>
    
  </div>
    </div>
    </div>
    </div>  
  </div>
  </div>
  </fieldset>
    
  
</form>
	</center>

</body>
</html>
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