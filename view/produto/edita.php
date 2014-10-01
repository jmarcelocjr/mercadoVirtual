'<?php 
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

/*
 * 	Descrição do Arquivo
 * 	@author - João Ricardo Gomes dos Reis
 * 	@data de criação - 01/04/2014
 * 	@arquivo  - edita.php
 */
 
require_once("../../controller/produto.controller.class.php");
require_once("../../model/produto.class.php");
require_once("../../model/marca.class.php");
require_once("../../model/preco.class.php");
require_once("../../model/quantidade.class.php");

session_start();

$ProdutoController = new ProdutoController();
$produto 	= new Produto();

$MarcaController = new MarcaController();
$marca  = new Marca();

$PrecoController = new PrecoController();
$preco  = new Preco();

$QuantidadeController = new QuantidadeController();
$quantidade  = new Quantidade();

$SetorController = new SetorController();

if(isset($_POST['submit'])) {

	$produto->setId($_POST['id']);
	$produto->setDescricao($_POST['descricao']);
	$produto->setQuantidade_id($_POST['Quantidade_id']);
	$produto->setStatus($_POST['Status']);	
	$produto->setSetor_id($_POST['Setor_id']);
	$produto->setMarca_id($_POST['Marca_id']);

  $preco->setId($_POST['id']);
  $preco->setValor($_POST['valor']);
  $preco->setProduto_has_marca_id($_POST['setProduto_has_marca_id']);
  $preco->setMecado_id($_POST['Mercado_id']);

  $quantidade->setId($_POST['id']);
  $quantidade->setPeso($_POST['peso']);
  $quantidade->setUnidade($_POST['unidade']);

	if($produto->getId() > 0){
		$controller->update($produto, 'id');
	}else{
		$controller->save($produto, 'id');
    $controller->vinculaMarca();
	}
	header('Location: lista.php');
}


if(isset($_SESSION["id"])){
	$produto = $controller->loadObject($_SESSION["id"], 'id');
}


$produtos = $controller->listObjects();
$registros  = $controller->listarSetor();

?>

  <form class="form-horizontal" id="contact-form" action="edita.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" id="id" value="<?php echo ($produto->getId() > 0 ) ? $produto->getId() : ''; ?>">
    <div class="control-group">
      <label class="control-label" for="nome">Descricao</label>
      <div class="controls">
        <input class="input-xlarge" type="text" name="descricao" id="descricao" required value="<?php echo ($produto->getId() > 0 ) ? $produto->getDescricao() : ''; ?>">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="quantidade">Quantidade</label>
      <div class="controls">
        <input class="input-xlarge" type="text" name="Quantidade_id" id="Quantidade_id" required value="<?php echo ($produto->getId() > 0 ) ? $produto->getQuantidade_id() : ''; ?>">
      </div>
    </div>
    <!--<div class="control-group">
      <label class="control-label" for="senha">Status</label>
      <div class="controls">
        <input class="input-xlarge" type="text" name="satus" id="status" required value="<?php echo ($produto->getId() > 0 ) ? $produto->getStatus() : ''; ?>">
      </div>
    </div>-->
    

    <div class="control-group">
      <label for="label" class="control-label" >Selecione um Setor</label>
      <div class="controls">
  <select id="Setor_id" name="Setor_id">
    <option>Selecione...</option>
    <?php while($reg = mysqli_fetch_array($registros)) { ?>
    <option value="<?php echo $reg['id'] ?>" selected="selected"><?php echo $reg["setor"]; ?></option>
    <?php } ?>
  </div>
  </select></div>
    
    <!--<div class="control-group">
      <label class="control-label" for="status">Status</label>
      <div class="controls">
        <select class="input-xlarge" name="status" id="status">-->
        
        
        	
        </select>
      </div>
    </div>
  
    <div class="control-group">
      <div class="controls">
        <input type="submit" class="btn btn-info btn-large" value="Salvar" name="submit">
      </div>
    </div>
  </form>
