<?php 
	require_once 'header.php';
	require_once "../conexionTables.php";
	$conexion = conexion();

	$sql="SELECT id_usuario,nombre_usuario,contrasena,foto FROM usuario";
	$result=mysqli_query($conexion,$sql);
	while($ver=mysqli_fetch_row($result)){ 
		$datos=$ver[0]."||".
		$ver[1]."||".
		$ver[2]."||".
		$ver[3];
	}
    
?>
	<div class="card text-center border-dark text-white bg-secondary" 
		 style="width: 100%; margin: auto; margin-top: 100px; max-width: 600px">
	  <img class="card-img-top" src="../image/logo.png" 
	   	   alt="Logo" style="width: 40%; margin-left: 170px; margin-top: 50px;">
	  <div class="card-body">
	    <h5 class="card-title">Bienvenido Usuario</h5>
	    <a id="modificar" href="modificar-perfil.php" class="btn btn-light" onclick="agregaform('<?php echo $datos ?>')">Modificar Perfil </a>
	    <a href="visualizar-perfil.php" class="btn btn-light" style="margin-left: 100px;">Visualizar Perfil</a>
	  </div>
	</div>

<?php 
    require_once 'footer.php';
?>