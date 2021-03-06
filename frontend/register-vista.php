<?php 
    require_once 'header-login-signup.php';
?>
		<div class="card text-center border-dark" style="width: 100%; margin: auto; margin-top: 100px; max-width: 600px">
            <div class="card-header bg-dark">
                <div class="logo-title">
                    <img src="./image/logo.png" alt="logo-title">
                    <h2>Dilo y Traduce</h2>
                </div>
                <div class="menu">
                    <a href="login.php"  style="font-size: 18px;"><li class="module-login">Iniciar Sesion</li></a>
                    <a href="register.php"  style="font-size: 18px;"><li class="module-register active">Registrar</li></a>
                </div>
            </div>
            <div class="card-body bg-light">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
	                <div class="welcome-form">
	                	<h1>  Bienvenido </h1><h2> Registrate </h2>
	                </div>
	                <div class="user line-input">
	                    <label class="user-add-1icon-"></label>
	                    <input type="text" placeholder="Nombre Usuario" name="nombre_usuario">
	                </div>
	                <div class="password line-input">
	                    <label class="lockicon-"></label>
	                    <input type="password" placeholder="Contraseña" name="contrasena">
	                </div>
	                <div class="password line-input">
	                    <label class="lockicon-"></label>
	                    <input type="password" placeholder="Confirmar Contraseña" name="contrasena2">
	                </div>
	                
	                <?php if(!empty($error)): ?>
	                <div class="mensaje">
	                    <?php echo $error; ?>
	                </div>  
	                <?php endif; ?>
	                <div>
	                    <button id="buttonCancelar" type="reset">Cancelar<label class="btn"></label></button>
	                    <button id="buttonEnviar" type="submit">Enviar<label class="btn"></label></button>
	                </div>   
	            </form>
            </div>
        </div>
        
    </body>
</html>