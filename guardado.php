<?php 

$nombre = $_POST["nombre"];

$email = $_POST["email"];

$pais = $_POST["pais"];

$password = $_POST["password"];

if(isset($email)) {

$conexion = mysql_connect("localhost","root","") or die("No se pudo");

mysql_select_db("practica",$conexion) or die("Error en la base de datos");

$sql_insertar = "INSERT INTO USERS SET nombre = '$nombre', email = '$email', pais = '$pais', password = '$password'";

mysql_query($sql_insertar,$conexion) or die(mysql_error());
} 
else {
	header("location:index.php");
}

?>