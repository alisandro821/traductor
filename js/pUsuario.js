$(document).ready(function(){
	$("#modificar").click(function(){
		var formData = new FormData($("#guardar")[0]);
		$.ajax({
                  url: '../controllers/perfilController.php',
                  type : 'GET',
                  data: formData,
                  contentType: false,
                  processData: false,
                  success: function(datos){
                    if(datos.success){
                      if(datos.success){
                        
                      }else{
                        
                      }
                    }
                  }
                });
	});
}