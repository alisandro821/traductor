<!-- Metodo el cual verifica si la sesion esta iniciada por un usuario, si es correcto se redirige a la vista principal, en caso contrario se regresara a la vista de inicio de sesion.-->
<?php session_start();

    if(isset($_SESSION['nombre_usuario'])) {
        header('location: principal.php');
    }else{
        header('location: login.php');
    }

?>