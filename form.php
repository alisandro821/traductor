<!-- Condicion que envia el nombre del usuario que se registro para la verificacion que esta iniciada la sesion con ese usuario -->
<?php
	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		echo "<br/>User Has submitted the form and entered this name : <b> $name </b>";
		echo "<br>You can use the following form again to enter a new name.";
	} 
?>
<!DOCTYPE html>
<html>
	<head>
 		<title>Dilo y Traduce</title>
 	</head>
 	<body>
	 	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="name"><br>
			<input type="submit" name="submit" value="Submit Form"><br>
		</form>
 	</body>
</html>
