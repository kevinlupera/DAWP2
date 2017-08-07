<?php

include("modelo/Producto.php");

function obtener_producto($producto_id){
    $enlace = mysqli_connect("localhost", "root", "mysql", "tienda");
    
    /* verificar la conexión */
    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }
    $consulta="SELECT * FROM tienda.producto WHERE producto_id=".$producto_id;
    
    $resultado = mysqli_query($enlace, $consulta);

    if (!$resultado) {
        die("Error: no se pudo realizar la consulta");
    }   
    $fila = mysqli_fetch_assoc($resultado);
             
    if(!isset($fila)){
        // Liberar resultados
        mysqli_free_result($resultado);
        // Cerrar la conexión
        mysqli_close($enlace);
        $p=new Producto( 0,"" ,"" ,"" ,"");
        return $p;
    }

    //creacion de un objeto
    $producto = new Producto($fila['producto_id'], 
                             $fila['pro_nombre'],
                             $fila['pro_descripcion'],
                             $fila['pro_precio'],
                             $fila['pro_img']);

    /* liberar el conjunto de resultados */
    mysqli_free_result($resultado);
    
    /* cerrar la conexión */
    mysqli_close($enlace);

  return $producto; 
}

function obtener_productos(){
    $enlace = mysqli_connect("localhost", "root", "mysql", "tienda");
    
    /* verificar la conexión */
    if (mysqli_connect_errno()) {
        printf("Conexión fallida: %s\n", mysqli_connect_error());
        exit();
    }
    $consulta="SELECT * FROM tienda.producto";
    
    $resultado = mysqli_query($enlace, $consulta);
    if (!$resultado) {
        die("Error: no se pudo realizar la consulta");
    }
    $arreglo= new ArrayObject();
        while ($fila = mysqli_fetch_assoc($resultado)) {
             $arreglo->append(new Producto($fila['producto_id'], 
                             $fila['pro_nombre'],
                             $fila['pro_descripcion'],
                             $fila['pro_precio'],
                             $fila['pro_img']));
        }
    mysqli_free_result($resultado);
    /* cerrar la conexión */
    mysqli_close($enlace);
  return $arreglo; 
}