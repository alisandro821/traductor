function agregaform(datos){

	d=datos.split('||');

	$('#id_usuario').val(d[0]);
	$('#nombre_usuario').val(d[1]);
	$('#contrasena').val(d[2]);
	$('#foto').val(d[3]);
	
}

function actualizaDatos(){


	id=$('#id_usuario').val();
	nombre=$('#nombre_usuario').val();
	contrasena=$('#contrasena').val();
	foto=$('#foto').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&contrasena=" + contrasena +
			"&foto=" + foto;

	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('componentes/tabla.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});

}