const express = require('express');
const mysql = require('mysql');

const PORT = process.env.PORT || 3050;

const app = express();

app.use(express.json());

const conexion = mysql.createConnection((
	host: 'localhost',
	user: 'root',
	password: '',
	database: 'prueba'
));

app.get('/', (req, res) =>{
	res.send("Bienvenido a la API REST BASIC Ferts");
});


conexion.connect(error => {
	if(error) throw error;
	console.log("Error en la conexion a la BD");
});

app.listen(PORT, () => console.log(`Server running in the ${PORT}`));