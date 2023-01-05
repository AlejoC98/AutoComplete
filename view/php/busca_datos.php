<?php 

if(!$_POST) exit();

$valor = $_POST["valor"];
$condicion = $_POST["condicion"];

include("conexion.php");

$sql = "SELECT Nombre, Telefono, Correo FROM USUARIOS WHERE $condicion = '$valor'";

$data_sql = mysqli_query($conexion, $sql);

$data = mysqli_fetch_assoc($data_sql);


if(!$data)
	echo "Error";
else
	echo json_encode($data);
?>