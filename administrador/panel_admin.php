<?php ob_start(); ?>
<?php 
session_start();
if (!isset($_SESSION['correo'])) {
  header("Location: index.php?no_user=No te has identificado!");
  exit();
}else{
?>
<?php 
include("conexion.php");
include("navegacion.php");
?>
<br>
<div class="container">
	<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Administrador</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="panel_admin.php">Inicio</a></li>
              <li><a href="panel_admin.php?subir_foto">Subir foto</a></li>
              <li><a href="panel_admin.php?ver_fotos">Ver fotos subidas</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="cerrar_sesion.php?cierra_admin">Cerrar sesión</a></li>
            </ul>
          </div>
        </div>
  	</nav>
  	<div class="jumbotron">
  		<h2>Bienvenido administrador</h2>
  		<p style="font-size:16px;">Este espacio es sólo para subir, ver y editar las fotos de la galería.</p>
  	</div>
  	<?php 
  		if (isset($_GET['subir_foto'])) {
  			include("subir_foto.php");
  		}elseif (isset($_GET['ver_fotos'])) {
  			include("ver_fotos.php");
  		}
  	?>
</div>
<?php } ?>
<?php ob_end_flush(); ?>