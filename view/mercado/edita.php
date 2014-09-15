<?php 
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);
 
require_once("../../controller/mercado.controller.class.php");
require_once("../../model/mercado.class.php");

session_start();

$controller = new MercadoController();
$mercado 	= new Mercado();

if(isset($_POST['submit'])) {

	$mercado->setId($_POST['id']);
	$mercado->setNome($_POST['nome']);
	$mercado->setEndereco($_POST['endereco']);
	$mercado->setCidade_Id($_POST['cidade_Id']);

	if($mercado->getId() > 0){
		$controller->update($mercado, 'id');
	}else{
		$controller->save($mercado, 'id');
	}
	header('Location: lista.php');
}


if(isset($_SESSION["id_mercado"])){
	$mercado = $controller->loadObject($_SESSION["id_mercado"], 'id');
}


$mercado = $controller->listObjects();


?>

  <form class="form-horizontal" id="contact-form" action="edita.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" id="id" value="<?php echo ($mercado->getId() > 0 ) ? $mercado->getId() : ''; ?>">
    <div class="control-group">
      <label class="control-label" for="nome">Nome</label>
      <div class="controls">
        <input class="input-xlarge" type="text" name="nome" id="nome" required value="<?php echo ($mercado->getId() > 0 ) ? $mercado->getNome() : ''; ?>">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="endereco">Endereco</label>
      <div class="controls">
        <input class="input-xlarge" type="text" name="endereco" id="endereco" required value="<?php echo ($mercado->getId() > 0 ) ? $mercado->getEndereco() : ''; ?>">
      </div>
    </div>
  
    <div class="control-group">
      <div class="controls">
        <input type="submit" class="btn btn-info btn-large" value="Salvar" name="submit">
      </div>
    </div>
  </form>
