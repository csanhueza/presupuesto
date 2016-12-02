<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	$active_principal="active";
	$active_facturas="";
	$active_productos="";
	$active_clientes="";	
	$active_soporte="";	
	$title="Facturas | Soporte Sym";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<?php include("head.php");?>

  </head>
  <body>
	<?php
	include("navbar.php");
	?>  
    <div class="container">
		<div class="panel panel-info">
		<div class="panel-heading">
			<h4><i class='glyphicon glyphicon-search'></i> Bienvenidos al sistema de presupuestos de Soporte Sym</h4>
		</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<h3>Que puedes realizar con éste sistema:</h3>
						<hr>
						<p>
						<li>Creación de clientes</li>
						<li>Creación de productos o servicios.</li>
						<li>Actualización de cada una de las tablas.</li>
						<li>Eliminación de productos o clientes.</li>
						<li>Actualización de datos de la empresa.</li>
						</p>
							
						</div>
				
			</form>
				<div id="resultados"></div><!-- Carga los datos ajax -->
				<div class='outer_div'></div><!-- Carga los datos ajax -->
			</div>
		</div>	
		
	</div>
	<hr>
	<?php
	include("footer.php");
	?>
	<script type="text/javascript" src="assets/js/Centrar.js"></script>
  </body>
</html>