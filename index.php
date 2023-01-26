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

    if (mysqli_num_rows($sqlEmpleados) > 0) {
        $$empleados = mysqli_fetch_all($sqlEmpleados,MYSQLI_ASSOC);
        echo json_encode($empleados);
        exit();
    }
    else {echo json_encode(["success"=>0]);
    }

}

//Borrar pero se le debe enviar una clave (par borrarlo)
if (isset($_GET["borrar"])){
    $sqlEmpleados =mysqli_query($conexionBD, "DELETE * FROM empleados WHERE id=".$_GET["borrar"]);
    if($sqlEmpleados){
    echo json_encode(["success"=>1]);
    exit();
    }
    else{ echo json_encode(["success"=>0]);
    }
    

}
?>
