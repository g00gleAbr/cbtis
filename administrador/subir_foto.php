<div class="container">
	<div class="row">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="title">Titulo</label>
				<input type="text" name="titulo" class="form-control" id="title" placeholder="Titulo de la imagen">
			</div>
			<div class="form-group">
				<label for="desc">Descripción</label>
				<textarea class="form-control" rows="3" name="descripcion" placeholder="Descripción de la imagen" required></textarea>
			</div>
			<div class="form-group">
				<input type="file" name="foto" required>
			</div>
			<div class="form-group">
				<button type="submit" name="subir_foto" class="btn btn-success">Subir foto</button>
				<button type="reser" class="btn btn-danger">Limpiar todo</button>
			</div>
		</form>
	</div>
</div>
<?php 
if (isset($_POST['subir_foto'])) {
	$titulo = $_POST['titulo'];
	$descripcion = $_POST['descripcion'];
	$foto = $_FILES['foto']['name'];
	$foto_tmp = $_FILES['foto']['tmp_name'];

	move_uploaded_file($foto_tmp,"eventos/$foto");

	$insertar = "INSERT INTO galeria(titulo,descripcion,foto) VALUES ('$titulo','$descripcion','$foto')";
	$query = mysqli_query($conexion,$insertar);
	if ($query) {
		echo "Foto subida correctamente";
	}else{
		echo "Hubo un error, intenta de nuevo o verifica";
	}
}
?>