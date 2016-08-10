<?php 
if (isset($_GET['cierra_admin'])) {
	session_start();
	session_destroy();
	header('Location: index.php');
}
?>