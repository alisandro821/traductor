<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dilo y Traduce</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link href="icon/fontawesome/css/all.css" rel="stylesheet">
    <script type="text/javascript" src="js/funcion.js"></script>
    <script type="text/javascript" src="js/jquery/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap/bootstrap.min.js"></script>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <i class="fas fa-home fa-2x" style="background:white"></i><br>
            <a class="navbar-brand" href="frontend/traductor.php">Traductor</a>    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a id="home" class="navbar-brand" href="principal.php">Dilo y Traduce</a>
            <div>
                <i class="far fa-address-card fa-2x" style="background:white"></i>
                <a class="navbar-brand" href="frontend/perfil-usuario.php">Perfil de Usuario</a>
            </div>
            <div class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu de Botones
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="frontend/abc.php">Abecedario</a>
                    <a class="dropdown-item" href="frontend/colores.php">Colores</a>
                    <a class="dropdown-item" href="frontend/verbos.php">Verbos</a>
                    <a class="dropdown-item" href="frontend/numeros.php">Numeros</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="welcome">
        <img src="image/logo.png" >
        <h1>Bienvenido, Usuario</h1>
        <a href="cerrar.php" class="text-white">Cerrar sesion</a>
    </div>
</body>
</html>