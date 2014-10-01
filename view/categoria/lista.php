<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

/*
 * 	Descrição do Arquivo
 * 	@author - João Ricardo Gomes dos Reis
 * 	@data de criação - 09/09/2014
 * 	@arquivo  - lista.php
 */

//Importanto as classes externas
require_once("../../controller/categoria.controller.class.php");
include_once("../../functions/functions.class.php");


//Instanciando a classe controladora
$categoria 	= new CategoriaController;
$registros 	= $categoria->lista();

//Instanciando a classe de funções
$functions	= new Functions;

//Verificando se está sendo passado algum id por parâmetro
//para o caso de exclusão de algum item
$id = ( isset($_GET['id']) ) ? $_GET['id'] : 0;

//Caso algum id tenha sido recebido, passa ele como parâmetro
//para o método de remoção de item
if ($id > 0) {
    $load = $categoria->remove($id, 'id');
    header('Location: lista.php?acao=3&tipo=1');
}

?>
<!DOCTYPE html>
<html>
  	<head>
    
        <meta charset="utf-8">
        <title>Listagem de Categorias</title>
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

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<img class="brand" src="../../img/assinatura_tanbook.png" alt="" style="width:200px;">-->
          <div class="nav-collapse collapse">

			<?php
                $functions->geraMenu();
            ?>

          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    
    
    <div class="container">

		<!-- Título -->
        <blockquote>
          <h2>Listagem de categorias</h2>
          <small>Utilize os campos abaixo para gerenciar as categorias</small>
        </blockquote>


        <!-- Mensagem de Retorno -->
        <?php
        if(!empty($_GET["tipo"])){
		?>
		<section id="aviso">
        <?php
        	$functions->mensagemDeRetorno($_GET["tipo"],$_GET["acao"]);
		?>
        </section> 
		<?php
        }
        ?>

		<hr>

        <div class="control-group">
            <div class="controls">
              <a href="edita.php" class="btn btn-info btn-large">Cadastrar uma nova categoria</a>
            </div>
		</div>

		<?php
        if($registros){
		?>
        <!-- Lista -->
        <table class="table table-hover">
			<thead>
            	<tr>
                    <th>Código</th>
                    <th>Descrição</th>
                    <th style="text-align:center"><i class="icon-edit"></i></th>
                    <th style="text-align:center"><i class="icon-remove"></i></th>
                </tr>
            </thead>
            <tbody>
            
				<?php
                	while($reg = mysqli_fetch_array($registros)){
				?>
            
            	<tr>
                    <td><?php echo $reg["id"]; ?></td>
                    <td><?php echo $reg["descricao"]; ?></td>
                    <td style="text-align:center"><a class="btn btn-small" type="button" href="edita.php?id=<?php echo $reg["id"]; ?>"><i class="icon-edit"></i></a></td>
                    <td style="text-align:center"><a class="btn btn-small" type="button" onClick="return confirm('Confirmar a exclusão deste item?');" href="lista.php?id=<?php echo $reg["id"]; ?>"><i class="icon-remove">x</i></a></td>
                </tr>
            
            	<?php
					}
				?>
            
            </tbody>
		</table>
        
      	<?php
		}else{
		?>
        	<div class="text-center">
                <h2>Opsss!!!</h2>
                <p>Sua pesquisa não retornou nenhum resultado válido.</p>
            </div>
        
        <?php
		}
		?>

      <hr>

      <footer>
        <p>&copy; Modelo 2014</p>
      </footer>

    </div> <!-- /container -->

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