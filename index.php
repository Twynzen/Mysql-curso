<?php
 //Esto es lo escencial para acceder a una bse de datos
$host = "localhost";
$user = "root";
$pass = "";
$db = "clientes";


$conexion = mysquli_connect($host, $user, $pass, $db);
$solcitud = " ";
$resultado = mysqli_query($conexion, $solicitud);

while($uno = mysqli_fetch_array($resultado)){
	echo $uno['nombre'] . $uno['apellido'];
}



?>
