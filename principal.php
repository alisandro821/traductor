<!-- Metodo que verifica el inicio de Sesion-->
<?php session_start();
	//Se verifica que hay una sesion iniciada
    $page=isset($_GET['page'])?$_GET['page']:'principal';
    if(isset($_SESSION['nombre_usuario'])){
			require 'frontend/usuario-vista.php';
    // En caso contrario te regresa a la vista de Inicio de sesion
    }else{
        header ('location: login.php');
    }
        
?>