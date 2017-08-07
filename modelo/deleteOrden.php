<?php

$orden_id=filter_input(INPUT_GET,"ord");

if(!isset($orden_id) || empty($orden_id)){
    header("Location:../cesta.php");
    exit;
} else {
    
    $enlace = mysqli_connect("localhost", "root", "mysql", "tienda");
    
    /* verificar la conexión */
    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }
    
    $consulta="DELETE FROM ordenes WHERE orden_id=".$orden_id;
    
    $resultado=mysqli_query($enlace, $consulta);
            
    /* liberar el conjunto de resultados */
    if($resultado==1){
        header("Location:../cesta.php");
    }
    
    /* cerrar la conexión */
    mysqli_close($enlace);
}