<?php 
include("navegacion.php"); 
include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body style="background-color:#eeeeee;">
<br>
 <div class="container">
 	<center>
		<h2>Inicia sesión</h2>
		<p>Sólo personal autorizado tiene acceso</p>
	</center>
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>

            <form class="form-signin" method="post" action="">
                <span id="reauth-email" class="reauth-email"></span>

                <input type="text" id="inputEmail" name="correo_admin" class="form-control" placeholder="Correo electrónico" required autofocus>

                <input type="password" id="inputPassword" name="pass_admin" class="form-control" placeholder="Contraseña" required>

                <button class="btn btn-lg btn-primary btn-block btn-signin" name="inicia_admin" type="submit">Iniciar sesión</button>
            </form>

        </div>
    </div>
</body>
</html>
<?php 
if (isset($_POST['inicia_admin'])) {
	$correo_admin = $_POST['correo_admin'];
	$pass_admin = $_POST['pass_admin'];

	$selecciona_admin = "SELECT * FROM administradores WHERE correo = '$correo_admin' AND pass = '$pass_admin'";
	$query_selecciona_admin = mysqli_query($conexion,$selecciona_admin);
	$revisa_admin = mysqli_num_rows($query_selecciona_admin);
	if ($revisa_admin == 0) {
		echo "<center>Contraseña o correo incorrectos, intenta de nuevo.</center>";
		exit();
	}else{
		session_start();
		$_SESSION['correo'] = $correo_admin;
		header('Location: panel_admin.php');
	}
}
?>