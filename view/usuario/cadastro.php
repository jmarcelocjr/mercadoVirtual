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

<form class="form-horizontal">
  <div class="control-group">
  <fieldset style="width : 50%">
  	
  
  <legend>Informações Do Mercado</legend>
  	<label class="control-label" for="inputEmail">Nome :</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Nome">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEndereco">Endereço :</label>
    <div class="controls">
      <input type="text" id="inputEndereco" placeholder="Endereço">
    </div>
  </div>
  </fieldset>
  <fieldset style="width : 50%">
  <legend>Informações De Login</legend>
  	<label class="control-label" for="inputEmail">Usuario :</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Nome">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Senha :</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Senha">
    </div>
  </div>
  </fieldset>
    
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn">Cadastrar</button>
    </div>
  </div>
</form>
	
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