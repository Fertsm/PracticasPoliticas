$(document).ready(function() {
	//GUARDAR EL COMENTARIO EN LA BD
	$(document).on('click', '#btn_comentario', function(e) {
		e.preventDefault();
		var nombre = $('#name').val();
		var telefono = $('#telefono').val();
		var correo = $('#email').val();
		var comentario = $('#message').val();
		var title = $('#titulo').val();
		var fec = new Date();
		var fecha = fec.getFullYear() + "-" + (fec.getMonth()+1) + "-" + fec.getDate();
		$.ajax({
			url: 'funcionesg.php',
			type: 'POST',
			data: {
				'save': 1,
				'name': nombre,
				'phone': telefono,
				'email': correo,
				'comment': comentario,
				'date': fecha,
				'tit': title,
			},
			success: function(respuesta){
				$('#name').val('');
				$('#telefono').val('');
				$('#email').val('');
				$('#message').val('');
				$('#titulo').val('');
				$('#area_comentarios').append(respuesta);
			}
		})
	});	
});