<?php
include("modelo/Usuario.php");
//leer parametros
$option=filter_input(INPUT_GET,"op");
$ca=filter_input(INPUT_GET,"ca");
//Ver el estado de la variable
if(!isset($option) || empty($option))
{
    header("Location:login.php");
    exit;
}
if($option==1){
    //Leer parametros
    $usuario=  filter_input(INPUT_POST, "usuario");
    $clave=  filter_input(INPUT_POST, "clave");
    if(!empty($usuario) && !empty($clave)){
        //validar las credenciales
        //validar con Base de datos
        $usuarioObjeto=validarUsuario($usuario,$clave);
        if(isset($usuarioObjeto)&&!empty($usuarioObjeto)){
            //TRABAJO CON SESIONES
            session_start();//INCIO DE LA SESION
            //ALMACENADO DE DATOS DE LA SESION
            $_SESSION['usuario']=$usuarioObjeto;//ALMACENADO 
            header("Location:index.php");
            exit;
        }else{
            header("Location:login.php");
            exit;
        }
    }else {
        header("Location:login.php");
        exit;
    }
    
}else if($option ==2){
    //salir
    session_start();
    //elimanr variables almacendas
    session_unset();
    //eliminar/destruir sesion
    session_destroy();
    header("Location:login.php");
}


function validarUsuario($user, $pass) {
    //Permite incluir un archivo dentro de otro
    include("modelo/conexion.php");
  
    $sentencia = "SELECT * FROM usuario,persona where " .
            "usuario_id=persona.persona_id and usuario='" . $user .
            "' and clave='" . $pass . "'";
    // Ejecuta la sentencia SQL 
    $resultado = mysqli_query($link, $sentencia);
    //echo $sentencia;
    if (!$resultado) {
        die("Error: no se pudo realizar la consulta");
    }

    $fila = mysqli_fetch_assoc($resultado);
    //validacion
    if(!isset($fila)){
        // Liberar resultados
        mysqli_free_result($resultado);
        // Cerrar la conexión
        mysqli_close($link);
        return;
    }
    
    //creacion de un objeto
    $usuario = new Usuario($fila['usuario_id'], 
            $fila['usuario'], 
            $fila['nombre'], 
            $fila['apellido']);

    // Liberar resultados
    mysqli_free_result($resultado);
    // Cerrar la conexión
    mysqli_close($link);
    return $usuario;
}
    
    


