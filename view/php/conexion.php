<?php 

# Conexion a la base de datos

#Nombre del servidor
$sever = "localhost";
#Nombre de la base de datos
$database = "autocompletar";
#Nombre de usuario para ingresar a la base de datos
$db_user = "root";
# Pass del usuario
$db_pass = "";

#Conexion con el servidor
$conexion = mysqli_connect($sever, $db_user, $db_pass, $database) or die("Erro".mysql_error());
 ?>