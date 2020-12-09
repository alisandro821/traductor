function validar(form){
	var formulario = form.txto;
	if (formulario.value.length==0) {
		console.log("Ingresa palabra");
		formulario.focus();
		return false;
	} else{
		form.submit();
	 }
}