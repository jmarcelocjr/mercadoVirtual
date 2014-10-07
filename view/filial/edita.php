<?php 
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);
 
require_once("../../controller/filial.controller.class.php");
require_once("../../model/filial.class.php");

session_start();

$controller = new FilialController();
$filial 	= new Filial();

if(isset($_POST['submit'])) {

	$filial->setId($_POST['id']);
	$filial->setNome($_POST['nome']);
	$filial->setEndereco($_POST['endereco']);
	$filial->setCidade_Id($_POST['cidade_Id']);
  $filial->setMercado_Id($_POST['Mercado_Id']);

	if($filial->getId() > 0){
		$controller->update($filial, 'id');
	}else{
		$controller->save($filial, 'id');
	}
	header('Location: lista.php');
}


if(isset($_SESSION["id_filial"])){
	$filial = $controller->loadObject($_SESSION["id_filial"], 'id');
}


$filial = $controller->listObjects();


?>

  <form class="form-horizontal" id="contact-form" action="edita.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" id="id" value="<?php echo ($filial->getId() > 0 ) ? $filial->getId() : ''; ?>">
    <div class="control-group">
      <label class="control-label" for="nome">Nome</label>
      <div class="controls">
        <input class="input-xlarge" type="text" name="nome" id="nome" required value="<?php echo ($filial->getId() > 0 ) ? $filial->getNome() : ''; ?>">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="endereco">Endereco</label>
      <div class="controls">
        <input class="input-xlarge" type="text" name="endereco" id="endereco" required value="<?php echo ($filial->getId() > 0 ) ? $filial->getEndereco() : ''; ?>">
      </div>
    </div>
  
    <div class="control-group">
      <div class="controls">
        <input type="submit" class="btn btn-info btn-large" value="Salvar" name="submit">
      </div>
    </div>
  </form>
