<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

//Importanto as classes externas
require_once("C:/wamp/www/mercadoVirtual/controller/setor.controller.class.php");
include_once("C:/wamp/www/mercadoVirtual/functions/functions.class.php");


//Instanciando a classe controladora
$setor 	= new SetorController;
$registros 	= $setor->lista();


//Método construtor do arquivo controlador

/* ERRO AQUI TCHELO
public function __construct() {
	//Passa como parâmetro a tabela
    parent::__construct("setor");
}
*/

/* ERRO AQUI TAMBÉM TCHELO	
public function lista(){
	return $this->execute_query("SELECT setor.id, setor.descricao FROM setor;");
}
*/

//Instanciando a classe de funções
$functions	= new Functions;

//Verificando se está sendo passado algum id por parâmetro
//para o caso de exclusão de algum item
$id = ( isset($_GET['id']) ) ? $_GET['id'] : 0;

//Caso algum id tenha sido recebido, passa ele como parâmetro
//para o método de remoção de item
if ($id > 0) {
    $load = $setor->remove($id, 'id');
    header('Location: lista.php?acao=3&tipo=1');
}

?>
<!DOCTYPE html>
<html>
  	<head>
    
        <meta charset="utf-8">
        <title>Setores</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <!-- Estilos -->
        <!-- Não sei se é pra apagar, então comentei... GABRIEL NETTO.
        <link href="file:///C|/wamp/www/mercadoVirtual/css/bootstrap.css" rel="stylesheet">
        <link href="file:///C|/wamp/www/mercadoVirtual/css/geral.css" rel="stylesheet">
        <link href="file:///C|/wamp/www/mercadoVirtual/css/validation.css" rel="stylesheet">
        <link href="file:///C|/wamp/www/mercadoVirtual/css/bootstrap-responsive.css" rel="stylesheet">        
		-->
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
          <!--
          <img class="brand" src="file:///C|/wamp/www/mercadoVirtual/img/assinatura_tanbook.png" alt="" style="width:200px;">
          -->
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
          <h2>Listagem de setores do mercado</h2>
          <small>Utilize os campos abaixo para gerenciar os setores</small>
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
              <a href="file:///C|/wamp/www/mercadoVirtual/view/setor/edita.php" class="btn btn-info btn-large">Cadastrar um novo setor</a>
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
                    <th>Nome</th>
                    <th style="text-align:center"><i class="icon-edit"></i></th>
                    <th style="text-align:center"><i class="icon-remove"></i></th>
                </tr>
            </thead>
            <tbody>
            
				<?php
                	while($reg = mysql_fetch_array($registros)){
				?>
            
            	<tr>
                    <td><?php echo $reg["id"]; ?></td>
                    <td><?php echo $reg["nome"]; ?></td>
                    <td style="text-align:center"><a class="btn btn-small" type="button" href="file:///C|/wamp/www/mercadoVirtual/view/setor/edita.php?id=<?php echo $reg["id"]; ?>"><i class="icon-edit"></i></a></td>
                    <td style="text-align:center"><a class="btn btn-small" type="button" onClick="return confirm('Confirmar a exclusão deste setor?');" href="file:///C|/wamp/www/mercadoVirtual/view/setor/lista.php?id=<?php echo $reg["id"]; ?>"><i class="icon-remove"></i></a></td>
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
                <h2>Opa!!</h2>
                <p>Sua pesquisa não retornou nenhum resultado válido.</p>
            </div>
        
        <?php
		}
		?>

      <hr>

      <footer>
        <p>&copy; Mercaddo Virtual 2014</p>
      </footer>

    </div> <!-- /container -->
		
    	<!-- Javascript -->
        <!--
		<script src="file:///C|/wamp/www/mercadoVirtual/js/jquery.js"></script>
        <script src="file:///C|/wamp/www/mercadoVirtual/js/jquery.validate.min.js"></script>
        <script src="file:///C|/wamp/www/mercadoVirtual/js/bootstrap-transition.js"></script>
        <script src="file:///C|/wamp/www/mercadoVirtual/js/bootstrap-alert.js"></script>
        <script src="file:///C|/wamp/www/mercadoVirtual/js/bootstrap-modal.js"></script>
        <script src="file:///C|/wamp/www/mercadoVirtual/js/bootstrap-dropdown.js"></script>
        <script src="file:///C|/wamp/www/mercadoVirtual/js/bootstrap-scrollspy.js"></script>
        <script src="file:///C|/wamp/www/mercadoVirtual/js/bootstrap-tab.js"></script>
        <script src="file:///C|/wamp/www/mercadoVirtual/js/bootstrap-tooltip.js"></script>
        <script src="file:///C|/wamp/www/mercadoVirtual/js/bootstrap-popover.js"></script>
        <script src="file:///C|/wamp/www/mercadoVirtual/js/bootstrap-button.js"></script>
        <script src="file:///C|/wamp/www/mercadoVirtual/js/bootstrap-collapse.js"></script>
        <script src="file:///C|/wamp/www/mercadoVirtual/js/bootstrap-carousel.js"></script>
        <script src="file:///C|/wamp/www/mercadoVirtual/js/bootstrap-typeahead.js"></script>
    	-->
	</body>
</html>