<!DOCTYPE html>
<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
<link rel="stylesheet" type="text/css" href="js/sweetalert/dist/sweetalert2.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/icomoon/style.css">
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta charset="UTF-8" />
	<title>Inicio</title>
</head>
<body oncontextmenu="return false">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="js/sweetalert/dist/sweetalert2.min.js"></script>
<div id="top"></div>
<div class="navbar-fixed">
  <nav class="white">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo blue-text" style="padding-left:20px;">CBTis 204</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse blue-text text-darken-2"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a class="blue-text text-darken-2" href="#ancla">Sitios</a></li>
          <li><a class="blue-text text-darken-2" href="#ancla2">Educación</a></li>
          <li><a class="blue-text text-darken-2" href="#ancla1">Comentarios</a></li>
          <li><a class="blue-text text-darken-2" onclick="Materialize.toast('Cada vez está más cerca, espéralo! :)', 4000, 'rounded')">Blog</a></li>
          <li><a class="blue-text text-darken-2" href="becas.html">Ver más</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a class="blue-text text-darken-2" href="#ancla">Sitios</a></li>
          <li><a class="blue-text text-darken-2" href="#ancla2">Educación</a></li>
          <li><a class="blue-text text-darken-2" href="#ancla1">Comentarios</a></li>
          <li><a class="blue-text text-darken-2" onclick="Materialize.toast('Cada vez está más cerca, espéralo! :)', 4000, 'rounded')">Blog</a></li>
        </ul>
      </div>
    </nav>
</div>    

<!--Parallax-->
<div class="parallax-container">
	<div class="parallax"><img src="img/esc.jpg"></div>
	<br><br><br><br>
		<h4 class="center-align white-text animated fadeIn retraso">Centro de Bachillerato Tecnológico<br>Industrial y de Servicios no.204</h4>
		<h6 class="center-align white-text animated fadeIn retraso2">Tlalpujahua Michoacán</h6>
		
	</div>
</div>
<!-- Video, misión y visión-->
	<div class="section white">
		<div class="row container">
			<h5 class="header">Vídeo documental</h5>
			<p>Vídeo documantal hecho por alumno de 6°B, especialidad de <b>programación</b></p>
			<video class="responsive-video" width="500" height="600" controls>
				<source src="img/Deterioro Ambiental.mp4" type="video/mp4">
			</video>
		</div>
	</div>
<!--Iconos-->
<div class="center-align row">
	<div class="col s4">
    	<i class="material-icons icono azul-marino">security</i>
    	<p>Seguridad en las áreas</p>
    </div>
    <div class="col s4">
    	<i class="material-icons icono azul-marino">school</i>
    	<p>Calidad de enseñanza</p>
    </div>
    <div class="col s4">
    	<i class="material-icons icono azul-marino">group</i>
    	<p>Trabajo en equipo</p>
    </div>
    <!--Mision y vision-->
    	<div class="center-align linea">
    		<a class="blue-grey lighten-3 boton-redondo maves-effect waves-light btn modal-trigger" href="#modal1">Misión</a>
    		<div id="modal1" class="modal">
   			 	<div class="modal-content">
      				<h4>Misión</h4>
      				<p>Formar personas con conocimientos tecnológicos en las áreas industrial, comercial y de servicios, a través de la preparación de bachilleres y profesionales técnicos, con el fin de contribuir al desarrollo sustentable del país.</p>
    			</div>
    		<div class="modal-footer">
      			<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
    		</div>
  		</div>
    </div>
    	<div class="center-align linea">
    		<a class="blue-grey lighten-3 boton-redondo waves-effect waves-light btn modal-trigger" href="#modal2">Visión</a>
    		<div id="modal2" class="modal">
   			 	<div class="modal-content">
      				<h4>Visión</h4>
      				<p>Ser una institución de educación media superior certificada, orientada al aprendizaje y desarrollo de conocimientos tecnológicos y humanísticos.</p>
    			</div>
    		<div class="modal-footer">
      			<a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
    		</div>
  		</div>
    </div>
  </div>
</div>
<!--Seccion de intereses-->
<div id="ancla">
  <div class="section white">
  	<div class="row container">
  		<h5 class="header">Sitios de interés</h5>
  		<p class="grey-text text-darken-3 lighten-3">
              <a href="http://www.prepaenlinea.sep.gob.mx/" target="_blank" title="Prepa en línea"> <img src="img/otros/prepa.jpg" class="responsive-img"></a>
              <a href="http://www.decidetusestudios.sep.gob.mx/" target="_blank" title="Decide tu futuro"><img src="img/otros/futuro.jpg" class="responsive-img"></a>
              <a href="http://www.fomentoalalectura.sems.gob.mx/" target="_blank" title="Jóvenes lectores"><img src="img/otros/lectura.jpg" class="responsive-img"></a>
              <a href="http://www.tuprepaenvideos.sep.gob.mx/" target="_blank" title="Tu prepa en videos"><img src="img/otros/prepav.jpg" class="responsive-img"></a>
              <a href="http://becas.sep.gob.mx/" target="_blank" title="Becas media superior"><img src="img/otros/becas.jpg" class="responsive-img" width="155" height="140"></a>
            </p>
  	</div>
  </div>
</div>

<!--Mapa y calenadario-->
<div class="row container"><h5>Ubicación y calendario</h5></div>
<div class="center-align">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3754.0838509290425!2d-100.1824936309103!3d19.794041844855677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x3d2cc49ac03c70f2!2sCBTIS+No.+204!5e0!3m2!1ses-419!2smx!4v1429149165101" width="500" height="350" frameborder="0" style="border:0" class="linea z-depth-1">
    </iframe>
    <iframe src="https://www.google.com/calendar/embed?height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=dlg5mi61ee2vje1aq4rqtjjch8%40group.calendar.google.com&amp;color=%235B123B&amp;ctz=America%2FMexico_City" style=" border-width:0 " width="500" height="350" frameborder="0" class="linea z-depth-1"></iframe>
</div>
<!--Interés educaconal-->
<div id="ancla2">
  <div class="section white">
  		<h5 class="header row container">Sitios de interés educacional</h5>
  	<div class="center-align row">
  			<a href="https://cbtis204.edu20.org/" target="_blank" title="Edu 2.0"><img src="img/edu.jpg" width="200" height="200" class="responsive.img"></a>
           	<a href="https://www.geogebra.org/" target="_blank" title="GeoGebra"><img src="img/geo.jpg" class="responsive-img" width="230" height="230"></a>
           	<a href="https://www.edmodo.com/?language=es" title="Edmodo" target="_blank"><img src="img/edmodo.jpg" class="responsive-img"></a>
           	<a href="https://es.khanacademy.org/" title="Khan Academy" target="_blank"><img src="img/khan.jpg" width="200" height="220"></a>
            <a href="https://es.duolingo.com/" target="_blank" title="Duolingo"><img src="img/duolingo.png"></a>
  	</div>
  </div>
</div>
<!--Directorio-->
<table class="highlight azul-marino centered">
	<thead>
		<tr>
			<th data-field="nombre">Nombre</th>
			<th data-field="puesto">Puesto</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>LAE. Verónica Garcia Pérez</td>
			<td>Director/a</td>
		</tr>
		<tr>
			<td>Subdirector Académico</td>
            <td>MCD. Roberto López González</td>
		</tr>
		<tr>
			<td>Subdirector Administrativo y PLaneación</td>
            <td>LSC. Patricia Nava Camacho</td>
		</tr>
		<tr>
			<td>Encargado de departamento de Servicios de Docentes</td>
            <td>CP. Florencio Pérez Colín</td>
		</tr>
		<tr>
			<td>Encargado de departamento de Servicios Escolares</td>
            <td>IBQ. José Luis Valenzuela Rangel</td>
		</tr>
		<tr>
			<td>Jefe de departamento de Planeación</td>
            <td>MC. Gabriel Esteban Olay Blanco</td>
		</tr>
		<tr>
			<td>Jefe de departamento de vinculación con el Sector Productivo</td>
            <td>CP.Gabriel Hernández Pérez</td>
		</tr>
	</tbody>
</table>
<div class="divider"></div>
<!--Anuncios (NO EDITAR)
<div class="section white">
  <div id="ancla">
    <div id="capa">
      <h4 class="row container">Avisos recientes</h4>
        <?php /* include("sistema/conexion.php"); */ ?>
        <?php 
        /*
         $selct = "SELECT * FROM noticias LIMIT 0,5";
         $query = mysqli_query($conexion,$selct);

         $colum = mysqli_num_rows($query);
         if ($colum == 0 ) {
          echo "No hay ningun dato subido :(";
         }elseif ($colum > 1) {
          while ($row = mysqli_fetch_array($query)) {
            $titulo = $row['titulo'];
            $descripcion = $row['descripcion'];
            $fecha = $row['fecha'];
        ?>
        <div class="row container">
          <div class="card-panel">
            <span class="blue-text text-darken-2" style="font-size:17px;"><?php echo $titulo; ?></span>
            <br>
            <span class="grey-text"><?php echo $descripcion; ?></span>
            <br><br>
            Fecha a realizar: <span class="blue-text text-darken-2"><?php echo $fecha; ?></span>
          </div>
        </div>   
          <?php 
            }
          }
          */
          ?>
      </div>
    </div>
  <center>
    <button class="btn waves-effect waves-light boton-redondo red darken-1" onclick="javascript:esconde();">Ocultar anuncios</button>
    <button class="btn waves-effect waves-light boton-redondo green darken-1" onclick="javascript:visible();">Mostrar anuncios</button>
  </center>
</div>
-->
<div class="divider"></div>
	     <p class="center-align azul-marino">
	      Centro de Bachillerato Tecnológico industrial y de servicios N° 204<br>
	      Tlalpujahua de Rayón, Mich.<br>
	      Km. 39 + 000 Carretera Maravatio-Tlalpujahua C.P. 61060<br>
	      Tel. (01-711) 1 58 09 71 ; Tel / Fax (01-711) 1 58 02 13<br>
	      </p>
	     <br>
	<div class="center-align">
	    <img src="img/CBTis.png" width="150" height="150">
	</div>
  <br>
  <center>
  <a class="btn-floating btn-large waves-effect waves-light red tooltipped" data-position="bottom" data-delay="50" data-tooltip="Volver Arriba" href="#top"><i class="material-icons">keyboard_arrow_up</i></a>
</center>
<!--Pie de página (NO EDITAR)-->
<div id="ancla1"></div>
 <footer class="page-footer indigo darken-1">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Hecho por</h5>
                <a style="padding-top:9px;" class="grey-text text-lighten-4" href="http://brahmdev.hol.es/" target="_blank">Abraham Ayala Padilla</a>
                <br>
                  <a style="color:#ffffff; padding-left:20px; font-size:20px;" href="https://www.facebook.com/brahamaladi" target="_blank"><span class="icon-facebook2"></span></a>
                  <a style="color:#ffffff; padding-left:20px; font-size:20px;" href="https://twitter.com/abr_ap" target="_blank"><span class="icon-twitter"></span></a>
                  <a style="color:#ffffff; padding-left:20px; font-size:20px;" href="#!" onclick="Materialize.toast('ayala.jap@gmail.com',5000)"><span class="icon-google-plus2"></span></a>
                 <br><br><br>
                 <a style="color:#ffffff; padding-left:20px; font-size:20px;" href="https://www.facebook.com/Cbtis204" target="_blank"><span class="icon-facebook2 left"></span>CBTis 204</a>
              </div>
              <div class="col l6">
                <h5 class="white-text">Envía un comentario</h5>
                <form action="" method="post">
                  <div class="input-field">
                      <i class="material-icons prefix">account_circle</i>
                      <input id="icon_prefix" type="text" name="nombre" class="white-text" required>
                      <label for="icon_prefix">Nombre</label>
                  </div>
                  <div class="input-field">
                    <i class="material-icons prefix">email</i>
                    <input id="mail" type="text" name="correo" class="white-text" required>
                    <label for="mail">Correo</label>
                  </div>
                  <div class="input-field">
                    <i class="material-icons prefix">comment</i>
                    <input id="com" type="text" name="comentario" class="white-text" required>
                    <label for="com">Comentario</label>
                  </div>
                  <button name="subir_comentario" class="btn waves-effect waves-light z-depth-2 indigo darken-2" style="margin-left:40px;" type="submit">Envíar
                    <i class="material-icons right">send</i>
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            CBTis 204
            <a class="grey-text text-lighten-4 right" href="#!">Tlalpujahua Michocán</a>
            </div>
          </div>
        </footer>
<!--Scripts para las funciones y animaciones-->
<script type="text/javascript">
$(function(){
     $('a[href*=#]').click(function() {
     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {
             var $target = $(this.hash);
             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
             if ($target.length) {
                 var targetOffset = $target.offset().top;
                 $('html,body').animate({scrollTop: targetOffset}, 1000);
                 return false;
            }
       }
   });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('.parallax').parallax();
});
$(".button-collapse").sideNav();
</script>
<script type="text/javascript">
$(document).ready(function(){
	$('.modal-trigger').leanModal();
});      
</script>
<script type="text/javascript">
function esconde(){
	var elemento = document.getElementById("capa");
	elemento.style.display = 'none';
}
function visible(){
	var elemento = document.getElementById("capa");
	elemento.style.display = 'block';
}
</script>
</body>
</html>
<?php 
$conexion = mysqli_connect('localhost','cbtised5_abr_ap','Root0101','cbtised5_sistema');
if (isset($_POST['subir_comentario'])) {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $comen = $_POST['comentario'];

  $destino = "ayala.jap@gmail.com";
  $contenido = "Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$comen;
  mail($destino, "Contacto", $contenido);

  $query = "INSERT INTO comentarios(nombre,correo,descripcion) VALUES ('$nombre','$correo','$comen')";
  $result = $conexion->query($query);
  if ($result) {
    echo "<script>swal('Hecho','Datos envíados correctamente','success')</script>";
  }else{
    echo "<script>swal('Error','Datos no envíados','error')</script>";
  }
}
?>