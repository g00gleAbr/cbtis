<table class="table table-bordered table-hover" style="text-align:center;">
	<tr class="text-warning">
		<td>Titulo</td>
		<td>Descripción</td>
		<td>Imagen</td>
		<td>Eliminar</td>
	</tr>
		<?php 
			$select = "SELECT * FROM galeria";
			$query = mysqli_query($conexion,$select);
			while ($row = mysqli_fetch_array($query)) {
				$titulo = $row['titulo'];
				$descripcion = $row['descripcion'];
				$imagen = $row['foto'];
		?>
		<tr>
			<td><?php echo $titulo; ?></td>
			<td><?php echo $descripcion; ?></td>
			<td><img width="50" src="eventos/<?php echo $imagen; ?>"></td>
			<form action="" method="post">
				<td><button name="si" class="btn btn-danger">Eliminar</button></td>
			</form>
		</tr>
		<?php } ?>
</table>
<?php 
if (isset($_POST['si'])) {
	$elimina_foto = "DELETE FROM galeria WHERE titulo = '$titulo' AND descripcion = '$descripcion'";
	$query_elimina = mysqli_query($conexion,$elimina_foto);
	if ($query_elimina) {
		header("Location: panel_admin.php?ver_fotos");
	}else{
		echo "Hubo un error, intenta de nuevo";
	}
}
?>