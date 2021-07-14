const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
	// usuario: /^[a-zA-Z0-9-\_\-]{4,16}$/, 
	nombre: /^[a-zA-ZÁ-ÿ\s]{1,40}$/,
	comentario: /^[0-9A-Za-zñáéíóúÑÁÉÍÓÚüÜ;\.:\s\-,]{50,200}$/,
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{10,14}$/
}

const campos = {
	nombre: false,
	comentario: false,
	correo: false,
	telefono: false,
}

const validarFormulario = (e) => {
	// console.log('Hola!')
	switch (e.target.name) {
		case 'name':
		if(expresiones.nombre.test(e.target.value)){
			document.getElementById('error-name').classList.add('input-error');
			document.getElementById('error-name').classList.remove('input-error-activo');
			campos.nombre = true;

		}else {
			document.getElementById('error-name').classList.remove('input-error');
			document.getElementById('error-name').classList.add('input-error-activo');
			campos.nombre = false;
		}
		break;
		case 'telefono':
		if(expresiones.telefono.test(e.target.value)){
			document.getElementById('error-telefono').classList.add('input-error');
			document.getElementById('error-telefono').classList.remove('input-error-activo');
			campos.telefono = true;

		}else {
			document.getElementById('error-telefono').classList.remove('input-error');
			document.getElementById('error-telefono').classList.add('input-error-activo');
			campos.telefono = false;

		}
		break;
		case 'email':
		if(expresiones.correo.test(e.target.value)){
			document.getElementById('error-correo').classList.add('input-error');
			document.getElementById('error-correo').classList.remove('input-error-activo');
			campos.correo = true;

		}else {
			document.getElementById('error-correo').classList.remove('input-error');
			document.getElementById('error-correo').classList.add('input-error-activo');
			campos.correo = false;

		}
		break;
		case 'message':
		if(expresiones.comentario.test(e.target.value)){
			document.getElementById('error-comentario').classList.add('input-error');
			document.getElementById('error-comentario').classList.remove('input-error-activo');
			campos.comentario = true;

		}else {
			document.getElementById('error-comentario').classList.remove('input-error');
			document.getElementById('error-comentario').classList.add('input-error-activo');
			campos.comentario = false;

		}
		break;	
	}
}

//validación mensajes 
inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	if (campos.nombre && campos.correo && campos.telefono && campos.comentario) {

		document.getElementById('exito').classList.add('mensaje-exito-activo');
		setTimeout( () => {
			document.getElementById('exito').classList.remove('mensaje-exito-activo');
		}, 5000);
		//formulario.reset();
	}else{
		document.getElementById('no-exito').classList.add('mensaje-activo');
		setTimeout( () => {
			document.getElementById('no-exito').classList.remove('mensaje-activo');
		}, 5000);
	}
});