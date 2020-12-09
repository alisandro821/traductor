<?php 
    require_once 'header.php';
?>
<div class="card text-center border-dark text-white bg-secondary" style="width: 100%; margin: auto; margin-top: 30px; max-width: 1000px">
	<h1 style="color:white;"><b>Bienvenido al traductor de idioma de Español a Nahuatl</b></h1>
 	<img class="card-img-top" src="../image/logo.png" alt="Logo" style="width: 30%; margin-left: 340px; margin-top: 50px;">
  	<div class="card-body">
    	<form action="../translate.php" method="POST" class="form-group">
    		<div class="form-group row">
			  	<div class="col-sm-12">
			  		<label style="font-size: 20px;">
			  			<b> Ingresar palabra a traducir: </b>
			  		</label>
					<input type="text" name="txto" required>
			  	</div>
			</div>
			<div class="form-group row">
		    	<div class="col-sm-12">
			    	<label style="font-size: 20px;"><b> Idioma </b></label>
					<select name="idioma" class="custom-select" style="max-width: 180px">
						<option value="1">Español --> Nahuatl</option>
						<option value="2">Nahuatl --> Español</option>
					</select>
			    </div>
			</div>
			<div class="form-group row">
		    	<div class="col-sm-12">
		      		<button type="button" onclick="validar(form)" value="Traducir" class="btn btn-light">Enviar</button>
		    	</div>
		    </div>
		</form>
    </div>
</div>
<?php 
    require_once 'footer.php';
?>