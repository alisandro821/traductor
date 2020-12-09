<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id_usuario'];
	$n=$_POST['nombre_usuario'];
	$c=$_POST['contrasena'];
	$f=$_POST['foto'];
	$sql="UPDATE usuario set nombre_usuario='$n',
		contrasena='$c',foto='$f'where id='$id'";
	echo $result=mysqli_query($conexion,$sql);

 ?>