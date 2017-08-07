<?php

/* 
INSERT INTO `tienda`.`persona` (`persona_id`, `nombre`, `apellido`, `cedula`, `fecha_nacimiento`, `genero`, `email`) 
  VALUES ('2', 'Kevin Alexander', 'Lupera Bravo', '0951726777', '1997-02-26', 'masculino', 'kevin.luperab@ug.edu.ec');

  INSERT INTO `tienda`.`usuario` (`usuario_id`, `usuario`, `clave`, `persona_id`) VALUES ('3', 'KevinL777', 'abcde', '2');

 *  */
include("../modelo/Usuario2.php");
if (isset($_POST['botonRegistrar'])) {
    //Leer parametros
    $usuId=  filter_input(INPUT_POST, "idUsuario");
    $usuClave=  filter_input(INPUT_POST, "claveUsuario");
    $perNombre=  filter_input(INPUT_POST, "nombreUsuario");
    $perApellido=  filter_input(INPUT_POST, "apellidoUsuario");
    $perCedula=  filter_input(INPUT_POST, "cedulaUsuario");
    $perCorreo=  filter_input(INPUT_POST, "correo");
    $perGenero=  filter_input(INPUT_POST, "genero");
    $perFechaNac=  filter_input(INPUT_POST, "fechaNacimiento");
    registrarUsuario($usuId,$usuClave,$perNombre,$perApellido,$perCedula,$perCorreo,$perGenero,$perFechaNac);
    header("Location:../index.php");
} 


function registrarUsuario($usuId,$usuClave,$perNombre,$perApellido,$perCedula,$perCorreo,$perGenero,$perFechaNac) {
    //Permite incluir un archivo dentro de otro
    include("../modelo/conexion.php");
    $sentencia="INSERT INTO tienda.persona (nombre, apellido, cedula, fecha_nacimiento, genero, email) "
        ."VALUES ('$perNombre', '$perApellido', '$perCedula'"
        .", '$perFechaNac','$perGenero', '$perCorreo');";
    // Ejecuta la sentencia SQL 
    $resultado =mysqli_query($link,$sentencia);
    //echo $resultado;
    if ($resultado!=1) {
        die("Error: no se pudo realizar el registro de persona");
        mysqli_close($link);
        return;
    }
    mysqli_close($link);
    //
    include("../modelo/conexion.php");
    $sentencia="SELECT persona_id FROM tienda.persona where cedula= '$perCedula';";
    // Ejecuta la sentencia SQL 
    $resultado2 = mysqli_query($link, $sentencia);
    if (!$resultado2) {
        die("Error: no se pudo realizar la consulta persona");
        mysqli_close($link);
        exit;        
    }
    $fila = mysqli_fetch_assoc($resultado2);
    //validacion
    if(!isset($fila)){
        // Liberar resultados
        mysqli_free_result($resultado2);
        // Cerrar la conexión
        mysqli_close($link);
        return;
    }
    // Liberar resultados
    mysqli_free_result($resultado2);
    $persona_id=$fila['persona_id'];
    mysqli_close($link);
    //
    include("../modelo/conexion.php");
    $sentencia="INSERT INTO tienda.usuario (usuario, clave,"
       . " persona_id) VALUES ('$usuId', '$usuClave', '$persona_id');";
    // Ejecuta la sentencia SQL 
    $resultado = mysqli_query($link, $sentencia);
    //echo $sentencia;
    if (!$resultado) {
        die("Error: no se pudo realizar el registro de usuario");
        mysqli_close($link);
        return; 
    }
    mysqli_close($link);
}
