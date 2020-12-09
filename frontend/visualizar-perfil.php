<?php session_start();
    require_once 'header.php';
     $nombre = $_SESSION['nombre_usuario'];
?>
	<div class="card text-center border-dark text-white bg-secondary" style="width: 100%; margin: auto; margin-top: 100px; max-width: 600px">
		<br>
		<h5 class="card-title">Bienvenido, Usuario</h5>
	    <img class="card-img-top" src="../image/logo.png" 
	   	   alt="Logo" style="width: 40%; margin-left: 170px; margin-top: 10px;">
	    <div class="card-body">
	    	<form action="../model/perfil.php">
	    	    <!--Nombre de Usuario-->
			  <div class="form-group row">
			  	<div class="col-sm-4">
			  		<p class="usericon-"></p>
			  	</div>
			    <div class="col-sm-4">
			      <input type="text" class="form-control" id="inputName" placeholder="Nombre de Usuario" value="<?php echo $nombre ?>" disabled="true">
			    </div>
			  </div>
			  	<div class="form-group row">
			    	<div class="col-sm-12">
			      		<a type="reset" href="perfil-usuario.php" class="btn btn-primary">Regresar</a>
			    	</div>
			    </div>
			</form>
	  	</div>
	</div>

<?php 
    require_once 'footer.php';
?>