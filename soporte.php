<?php
	session_start();
	if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
        header("location: login.php");
		exit;
        }
	
	$active_principal="";
	$active_facturas="";
	$active_productos="";
	$active_clientes="";	
	$active_soporte="active";
	$title="Soporte | Soporte Sym";
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
			<h4><i class='glyphicon glyphicon-search'></i> Encuentra información relevante del sistema aquí:</h4>
		</div>
			<div class="panel-body">
				<form class="form-horizontal" role="form" id="datos_cotizacion">
				
						<h3>Cosas que falta por integrar:</h3>
						<hr>
						<p>
						<li>Integración de pdf al sistema.</li>
						<li>Creación de clientes.</li>
						<li>Integración de más material desing</li>
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