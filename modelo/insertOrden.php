<?php

$producto_id=  filter_input(INPUT_POST, "idproducto");
$usuario_id=  filter_input(INPUT_POST, "idusuario");
$precio=  filter_input(INPUT_POST, "precio");
$cantidad=  filter_input(INPUT_POST, "cantidad");
$total=$precio * $cantidad;
$orden_estado=0;

echo $usuario_id." ".$producto_id." ".$precio." ".$cantidad." ".$total." ".$orden_estado;

if(!isset($producto_id) || empty($producto_id) || !isset($precio) || empty($precio) || 
        !isset($usuario_id) || empty($usuario_id)|| !isset($cantidad) || empty($cantidad)){
    header("Location:../ventas.php");
    exit;
}


    $enlace = mysqli_connect("localhost", "root", "mysql", "tienda");
    
    /* verificar la conexión */
    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }
    
    $insert="INSERT INTO ordenes (producto_id, usuario_id, precio, cantidad, total, orden_estado) VALUES ( ".$producto_id.", ".$usuario_id.", ".$precio.", ".$cantidad.", ".$total.", ".$orden_estado.")";
    
    $resultado = mysqli_query($enlace, $insert);

    if (!$resultado) {
        die("Error: no se pudo realizar la inserccion");
    }   
    /* cerrar la conexión */
    mysqli_close($enlace);
    
    header("Location:../cesta.php");

