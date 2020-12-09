<!-- Metodo de Inicio de Sesion-->
<?php session_start();
    /*Condicion que verifica si la sesion ya esta iniciada */
    if(isset($_SESSION['nombre_usuario'])) {
        header('location: index.php');
    }

    $error = '';
    /*Codicion que verifica los datos enviados con los que existe dentro de la Base de Datos*/
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nombre_usuario = $_POST['nombre_usuario'];
        $contrasena = $_POST['contrasena'];
        $contrasena = hash('sha512', $contrasena);
        /*Metodo try-catch para realizar la conexion y en caso de error obtenerlo*/
        try{
            $conexion = new PDO('mysql:host=localhost;dbname=traductor', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        /*Se prepara la conexion, con el usuario y la contrasena*/
        $statement = $conexion->prepare('
        SELECT * FROM usuario WHERE nombre_usuario = :nombre_usuario AND contrasena = :contrasena'
        );
        
        $statement->execute(array(
            ':nombre_usuario' => $nombre_usuario,
            ':contrasena' => $contrasena
        ));
        /*Verifica que el usuario coincida con el que esta dentro de la base */  
        $resultado = $statement->fetch();
        /*Si el resultado fue contrario a false inicia la sesion del usuario, en caso contrario manda un mensaje de error que el usuario no existe*/
        if ($resultado !== false){
            $_SESSION['nombre_usuario'] = $nombre_usuario;
            header('location: principal.php');
        }else{
            $error .= '<i>Este usuario no existe</i>';
        }
    }
/*Manda como requerimiento la vista de Inicio de Sesion*/  
require 'frontend/login-vista.php';


?>