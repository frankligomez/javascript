<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Conecta la base de datos con usuario, contraseña y nombre de la BD
$servidor = "localhost"; $usuario = "root"; $contrasenia = ""; $nombreBaseDatos = "empleados";
$conexionBD = new mysqli($servidos, $usuario, $contrasenia, $nombreBaseDatos);

// Consutla datos y recepciona una clave para consultar dichos datos con dicha clave
if (isset($_GET["consultar"])) {

    $sqlEmpleados =mysqli_query($conexionBD, "SELECT * FROM empleados WHERE id=".$_GET["consultar"]);
    
}


?>