<?php 
	require_once "../conexionTables.php";
	$conexion = conexion();
	require_once 'header.php';
 ?>	

    <div class="card text-center border-dark text-white bg-secondary"style="width: 100%; margin: auto; margin-top: 30px; max-width: 1100px">
	  	<h1 class="card-title" >Colores</h1>
	  	<div class="card-body">
	    	<img class="card-img-top" src="../image/logo.png" 
	   	   alt="Logo" style="width: 30%; margin-left: 30px;">	
	  	</div>
	  	<div class="card-body" style="width: 80%; margin-left: 120px;">
			<table class="table table-hover table-condensed table-bordered">
				<thead>
					<tr>
						<td>#</td>
						<td>Color en Español</td>
						<td>Color en Nahuatl</td>
						<td>Audio</td>
					</tr>
				</thead>
				<tbody>
					<?php 

						$sql="SELECT id_color,color_e,color_n,audio 
								FROM color";
						$result=mysqli_query($conexion,$sql);
						while($ver=mysqli_fetch_row($result)){ 

							$datos=$ver[0]."||".
								   $ver[1]."||".
								   $ver[2]."||".
								   $ver[3];
					?>

					<tr>
						<td><?php echo $ver[0] ?></td>
						<td><?php echo $ver[1] ?></td>
						<td><?php echo $ver[2] ?></td>
						<td> 
							<audio controls>
								<source src="<?php echo $ver[3] ?>" type="audio/mpeg">
							</audio> 
						</td>
					</tr>
					<?php 
						}
					?>
				</tbody>
			</table>
	  	</div>
	</div>
<?php 
    require_once 'footer.php';
?>