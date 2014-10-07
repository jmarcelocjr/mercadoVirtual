<?php

ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);

/*
 * 	Descrição do Arquivo
 * 	@author - João Ricardo Gomes dos Reis
 * 	@data de criação - 17/04/2014
 * 	@arquivo  - lista.php
 */
 
require_once("../../controller/usuario.controller.class.php");


$usuario 	= new UsuarioController;
$registros 	= $usuario->lista();


$id = ( isset($_GET['id']) ) ? $_GET['id'] : 0;

if ($id > 0) {
    $load = $usuario->remove($id, 'id');
    header('Location: lista.php?acao=3&tipo=1');
}

?>

		<?php
        if($registros){
		?>
        <!-- Lista -->
        <table class="table table-hover">
			<thead>
            	<tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th style="text-align:center">E-mail</th>
                    <th style="text-align:center">Tipo</th>
                    <th style="text-align:center">Ativo?</th>
                    <th style="text-align:center"><i class="icon-plus"></i></th>
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
                    <td><?php echo $reg["nomedousuario"]; ?></td>
					<td style="text-align:center"><?php echo $reg["email"]; ?></td>
                    <td style="text-align:center"><?php echo $reg["tipo"]; ?></td>
                    <td style="text-align:center"><input type="checkbox" <?php if($reg["ativo"]==1){ echo "checked"; } ?> onclick="editaCampo('usuario','ativo','<?php echo $reg["id"]; ?>',this)" ></td>
                    <td style="text-align:center"><a class="btn btn-warning btn-small" type="button" href="detalha.php?id=<?php echo $reg["id"]; ?>"><i class="icon-plus icon-white"></i></a></td>
                    <td style="text-align:center"><a class="btn btn-small" type="button" href="edita.php?id=<?php echo $reg["id"]; ?>"><i class="icon-edit"></i></a></td>
                    <td style="text-align:center"><a class="btn btn-small" type="button" onClick="return confirm('Confirmar a exclusão deste item?');" href="lista.php?id=<?php echo $reg["id"]; ?>"><i class="icon-remove"></i></a></td>
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

