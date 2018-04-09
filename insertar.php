<?php

$mysqli = new mysqli('192.168.0.115','Gps', '1234', 'bdgps');
	if($mysqli->connect_errno){
		die ('Error al conectarse con MySQL debido al error'.$mysqli->connect_error);
	}
 
//variables que almacenan los valores que enviamos por nuestra app, (observar que se llaman igual en nuestra app y aqui)
$direccion= $_POST['direccion'];
$coordenadas =$_POST['coordenadas'];

if (empty($_POST["coordenadas"]) AND $_POST["direccion"]!==''){
echo "Faltan DATOS los campos estan vacios"; 
}else{
 
	$sql = ("INSERT INTO gps (direccion, coordenadas) VALUES ('$direccion', '$coordenadas')");
	
	$resultado = $mysqli->query($sql);
}
?>