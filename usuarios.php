<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include("codigos/meta.php")?>
        <title>ALLBUY-USUARIOS</title>
        <link rel="stylesheet" href="estilos/estilos3.css"/> 
    </head>
    <body>
        <?php include("codigos/header.php")?>
        <?php include("codigos/nav.php")?>
        <div class=contenedor>
            <div class=contenedorUsuario>
                <h1>Buscar Usuario</h1>
                <form method="post" action="usuarios.php">
                    <input style="align:center;" id="mysearch" name="cedulaBuscada" type="search" placeholder="Cédula o RUC.." maxlength="10" 
                           onkeypress="validaSoloNumeros()" minlength="10" required/>
                    <input type="submit" value="Buscar" name="botonBuscar" style="width: 10%;">
                </form>
            </div>
        </div>
        <?php
                //Se ha pulsado el botón aceptar
                if (isset($_POST['botonBuscar'])) {
                    //Leer parametros
                    $usuario=  filter_input(INPUT_POST, "cedulaBuscada");
                    if(!empty($usuario)){
                        //validar con Base de datos
                        $usuarioObjeto=buscarUsuario($usuario);
                        if(isset($usuarioObjeto)&&!empty($usuarioObjeto)){
                            //TRABAJO CON SESIONES
                            $_SESSION['usuarioBuscado']=$usuarioObjeto;
                            header("Location:datosUsuario.php");
                            exit;
                        }else{
                            echo '<h2>Usuario no encontrado</h2>'; 
                            $_SESSION["usuarioBuscado"] = "";
                        header("Location:datosUsuario.php");
                            exit;
                        }
                    }else {
                        //echo '<h2>Usuario no encontrado</h2>';  
                        $_SESSION["usuarioBuscado"] = "";
                        header("Location:datosUsuario.php");
                        exit;
                    }
                } 
                function buscarUsuario($user) {
                    //Permite incluir un archivo dentro de otro
                    include("modelo/conexion.php");
                    $sentencia = "SELECT usuario_id,usuario,cedula,nombre,apellido,genero,email,fecha_nacimiento "
                            . "FROM usuario,persona where usuario_id=persona.persona_id and cedula=".$user;
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
                            $fila['apellido'],
                            $fila['cedula'],
                            $fila['fecha_nacimiento'], 
                            $fila['email'],
                            $fila['genero']);

                    // Liberar resultados
                    mysqli_free_result($resultado);
                    // Cerrar la conexión
                    mysqli_close($link);

                    return $usuario;
                }
            ?>
        <?php include("codigos/javas.php")?>
        <?php include("codigos/footer.php")?>
    </body>
</html>