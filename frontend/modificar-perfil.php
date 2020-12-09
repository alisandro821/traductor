<?php session_start();
	require_once 'header.php';
    $nombre = $_SESSION['nombre_usuario'];
	require_once "../conexionTables.php";
	$conexion = conexion();

	$sql="SELECT id_usuario,nombre_usuario,contrasena,foto 
								FROM usuario";
						$result=mysqli_query($conexion,$sql);
						while($ver=mysqli_fetch_row($result)){ 

							$datos=$ver[0]."||".
								   $ver[1]."||".
								   $ver[2]."||".
								   $ver[3];
	
?>
	<div class="card text-center border-dark text-white bg-secondary" style="width: 100%; margin: auto; margin-top: 100px; max-width: 600px">
		<br>
		<h5 class="card-title">Bienvenido, Usuario</h5>
	    <img class="card-img-top" src="../image/logo.png" 
	   	   alt="Logo" style="width: 40%; margin-left: 170px; margin-top: 10px;">
	    <div class="card-body">
	    	<form action="../controllers/perfilController.php">
	    	    <!--Nombre de Usuario-->
			  <div class="form-group row">
			  	<div class="col-sm-4">
			  		<p class="usericon-"></p>
			  	</div>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" id="inputName" placeholder="Nombre de Usuario" name="$nombre_usuario" value="<?php echo $ver[1]?>">
			    </div>
			  </div>
			  <!-- Foto de perfil-->
			    <div class="form-group row">
			    	<div class="col-sm-4">
			  			<p class="pictureicon-"></p>
			  		</div>
			    	<div class="col-sm-4">
			    		<input type="file" id="inputFoto" >
			    	</div>
			  	</div>
			  	<!-- Contraseña-->
			  	<div class="form-group row">
			    	<div class="col-sm-4">
			  			<p class="lockicon-"></p>
			  		</div>
			    	<div class="col-sm-4">
			     		<input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">
			    	</div>
			  	</div>
			  	<div class="form-group row">
			    	<div class="col-sm-6">
			      		<a type="submit" class="btn btn-primary">Guardar cambios</a>
			    	</div>
			    	<div class="col-sm-6">
			      		<a type="reset" href="perfil-usuario.php" class="btn btn-primary">Cancelar</a>
			    	</div>
			    </div>
			    <?php 
					}
				?>
			</form>
	  	</div>
	</div>

<?php 
    require_once 'footer.php';
?>