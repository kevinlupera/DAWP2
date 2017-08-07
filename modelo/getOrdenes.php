<?php

include("modelo/Orden.php");
function obtener_ordenes($usuario_id){
    $enlace = mysqli_connect("localhost", "root", "mysql", "tienda");
    
    /* verificar la conexión */
    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }
    $consulta="SELECT * FROM tienda.ordenes WHERE usuario_id='$usuario_id'";
     
    if ($resultado = mysqli_query($enlace, $consulta)) {
    /* obtener array asociativo */
        $arreglo= new ArrayObject();
        while ($fila = mysqli_fetch_assoc($resultado)) {
             $arreglo->append(new Orden($fila['orden_id'],
                     $fila['producto_id'],
                     $fila['usuario_id'],
                     $fila['precio'],
                     $fila['cantidad'],
                     $fila['total'],
                     $fila['orden_estado']));
        }

    }
    /* liberar el conjunto de resultados */
    mysqli_free_result($resultado);
    /* cerrar la conexión */
    mysqli_close($enlace);
  return $arreglo; 
}

