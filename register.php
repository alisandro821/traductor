<!-- Controlador de el registro de un usuario-->
<?php session_start();
    /*Se verifica si no estada iniciada la 
    sesion para mostrar el formulario de registro*/
    if(isset($_SESSION['nombre_usuario'])) {
        header('location: index.php');
    }
    /*Se utiliza el metodo de post para enviar 
    los datos registrados a la base de datos*/
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        /*Variables que guardan los datos del usuario*/
        $nombre_usuario = $_POST['nombre_usuario'];
        $contrasena = $_POST['contrasena'];
        $contrasena2 = $_POST['contrasena2'];
        /*Metodo de encriptacion  hash para la contrasena del usuario*/
        $contrasena = hash('sha512', $contrasena);
        $contrasena2 = hash('sha512', $contrasena2);
        /*Variable que guarda el error en caso de existirr*/
        $error = '';
        /*Condicion para verificar si esta incomplentos los campos del formulario para el registro*/
        if (empty($nombre_usuario) or empty($contrasena) or empty($contrasena2)){
            
            $error .= '<i>Favor de rellenar todos los campos</i>';
        }else{
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=traductor', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
        /*Consultas de SQL para guardar el usuario*/
            $statement = $conexion->prepare('SELECT * FROM usuario WHERE nombre_usuario = :nombre_usuario LIMIT 1');
            $statement->execute(array(':nombre_usuario' => $nombre_usuario));
            $resultado = $statement->fetch();
        /*Condicion para verificar si el usuario ya existe*/     
            if ($resultado != false){
                $error .= '<i>Este usuario ya existe</i>';
            }
        /*Condicion para verificar si ambas contrasenas del registro coinciden*/
            if ($contrasena != $contrasena2){
                $error .= '<i> Las contrasenas no coinciden</i>';
            }   
        }
        /*Condicion que verifica que no exista error para poder hacer una consulta y registrar la informacion en la base de datos*/
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO usuario (id_usuario, nombre_usuario, contrasena) VALUES (null, :nombre_usuario, :contrasena)');
           
            $statement->execute(array(
                ':nombre_usuario' => $nombre_usuario,
                ':contrasena' => $contrasena   
            ));
            /*Mensaje que muestra que el usuario se creo exitosamente*/
            $error .= '<i style="color: green;">Usuario registrado exitosamente</i>';
        }
    }
    /*Linea que requiere la vista de registro para el formulario*/
    require 'frontend/register-vista.php';
?>