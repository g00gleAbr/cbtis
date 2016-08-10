<?php ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
<link rel="stylesheet" type="text/css" href="js/sweetalert/dist/sweetalert2.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/animacion.css">
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="UTF-8"/>
	<title>Galería</title>
</head>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="js/sweetalert/dist/sweetalert2.min.js"></script>
<!--Contenido-->
<div class="navbar-fixed">
<!--dropdowns-->
<ul id="dropdown1" class="dropdown-content">
  <li><a class="waves-effect waves-teal" href="cafeteria.html">Cafetería</a></li>
  <li><a class="waves-effect waves-teal" href="biblioteca.html">Biblioteca</a></li>
  <li><a class="waves-effect waves-teal" href="verdes.html">Áreas verdes</a></li>
  <li><a class="waves-effect waves-teal" href="deportivas.html">Áreas deportivas</a></li>
  <li><a class="waves-effect waves-teal" href="lectura.html">Salón de lectura</a></li>
  <li><a class="waves-effect waves-teal" href="auditorio.html">Ver más</a></li>
</ul>
<ul id="dropdown3" class="dropdown-content">
  <li><a class="waves-effect waves-teal" href="administracion.html">Administración</a></li>
  <li><a class="waves-effect waves-teal" href="ofimatica.html">Ofimática</a></li>
  <li><a class="waves-effect waves-teal" href="programacion.html">Programación</a></li>
  <li><a class="waves-effect waves-teal" href="construccion.html">Construcción</a></li>
  <li><a class="waves-effect waves-teal" href="contabilidad.html">Contabilidad</a></li>
</ul>
<nav class="fondo-marino nav-margin">
		<div class="nav-wrapper row container">
		<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<ul id="nav-mobile" class="left hide-on-med-and-down">
				<li><a class="waves-effect waves-light" href="index.php">Inicio</a></li>
		        <li><a class="waves-effect waves-light" href="galeria.php">Galería</a></li>
		        <li><a class="waves-effect waves-light" href="requisitos.html">Requisitos</a></li>
		        <li><a class="waves-effect waves-light dropdown-button" href="#!" data-activates="dropdown3">Especialidades<i class="material-icons right">arrow_drop_down</i></a></li>
		        <li><a class="waves-effect waves-light dropdown-button" href="#!" data-activates="dropdown1">Instalaciones<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="waves-effect waves-light" href="becas.html">Servicios</a></li>
			</ul>
			<ul class="side-nav" id="mobile-demo">
        		<li><a class="waves-effect waves-light" href="index.php">Inicio</a></li>
		        <li><a class="waves-effect waves-light" href="galeria.php">Galería</a></li>
		        <li><a class="waves-effect waves-light" href="requisitos.html">Requisitos</a></li>
		        <li><a class="waves-effect waves-light" href="administracion.html">Especialidades</a></li>
		        <li><a class="waves-effect waves-light" href="cafeteria.html">Instalaciones</a></li>
		        <li><a class="waves-effect waves-light" href="becas.html">Servicios</a></li>
      		</ul>
		</div>
</nav>
</div>
<section id="top-bar">
	<h4 class="header white-text">Galería</h4>
	<p class="sub-header white-text">Aquí encontrarás todas nuestras experiencias</p>
</section>
<center>
<?php 
$url = "galeria.php";
$conexion = mysqli_connect('localhost','cbtised5_abr_ap','Root0101','cbtised5_sistema');
$consulta_noticias = "SELECT * FROM galeria";
$rs_noticias = mysqli_query($conexion, $consulta_noticias);
$num_total_registros = mysqli_num_rows($rs_noticias);
if ($num_total_registros > 0) {
	$TAMANO_PAGINA = 10;
        $pagina = false;
        if (isset($_GET["pagina"]))
            $pagina = $_GET["pagina"];
	if (!$pagina) {
		$inicio = 0;
		$pagina = 1;
	}
	else {
		$inicio = ($pagina - 1) * $TAMANO_PAGINA;
	}
	$total_paginas = ceil($num_total_registros / $TAMANO_PAGINA);
	echo '<p>Mostrando la pagina '.$pagina.' de ' .$total_paginas.' paginas.</p>';
	$consulta = "SELECT * FROM galeria ORDER BY id DESC LIMIT ".$inicio."," . $TAMANO_PAGINA;
	$rs = mysqli_query($conexion,$consulta);
	?>
	<?php 
	while ($row = mysqli_fetch_array($rs)) {
		$id_foto = $row['id'];
		$titulo_foto = $row['titulo'];
		$descripcion_foto = $row['descripcion'];
		$foto = $row['foto'];
	?>
	<div style="display:inline-block; padding:10px;" class="center-align">
		<p stye="font-size:24px;"><?php echo $titulo_foto; ?></p>
		<img data-caption="<?php echo $descripcion_foto; ?>" width="350" class="materialboxed" src="sistema/imagenes/eventos/<?php echo $foto; ?>"/>

	</div>
	<?php } ?>
	<?php 
	echo '<ul class="pagination">';

	if ($total_paginas > 1) {
		if ($pagina != 1)
			echo '<a class="waves-effect" href="'.$url.'?pagina='.($pagina-1).'"><i class="material-icons">chevron_left</i></a>';
		for ($i=1;$i<=$total_paginas;$i++) {
			if ($pagina == $i){
				echo '<li class="waves-effect active" style="color:#ffffff;">';
				echo $pagina;
				echo '</li>';
			}
			else{
				echo "<li class='waves-effect'>";
				echo '<a href="'.$url.'?pagina='.$i.'">'.$i.'</a>  ';
				echo "</li>";
			}
		}
		if ($pagina != $total_paginas)
			echo '<a class="waves-effect" href="'.$url.'?pagina='.($pagina+1).'"><i class="material-icons">chevron_right</i></a>';
	}
	echo '</ul>';
}
?>
</center>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80239486-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
	 $(document).ready(function(){
    $('.modal-trigger').leanModal();
  });
 $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
</script>
</body>
</html>
<?php ob_end_flush(); ?>