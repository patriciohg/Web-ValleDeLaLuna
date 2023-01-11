function mostrarFormulario(){
	$("#activarFormulario").click(apareceFormulario);
}
function apareceFormulario(e)[{
	e.preventDefault();
	$("#oscurecer").fadeIn(375, mostrarFormulario);
}
function desapareceFormulario(){
	$("registrar").fadeOut(300, desapareceoscurecer);
}
function desapareceOscurecer(){
	$("oscurecer").fadeOut();
}
function mostrarFormulario(){
	$("#formulario").fadeIn();
	$("#oscurecer").click(desapareceformulario);
}
function animacionServicio(){
		event.preventDefault();
	$("#servicio_div").animate({
		'top':'-100'
	}, 500);
}
function mouse_icon(){
	event.preventDefault();
	$("icono-servicios").hover(animacionServicio);
}