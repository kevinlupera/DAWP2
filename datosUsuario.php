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
        <?php
            $usuarioObjeto=$_SESSION['usuarioBuscado'];
            if(isset($usuarioObjeto)&&!empty($usuarioObjeto)){
                echo "
                    <div class=contenedor>
                        <div class=contenedorUsuario>
                            <div class=usuario id=usuario1>
                                <a href=# class=fotoUsuario><img src=imagenes/user-image.png alt=User style=height:100px;></a>
                                <div class=infoUsuario>
                                    <span id=nombreUsuario1>".$usuarioObjeto->getPer_nombres()."</span><br/>
                                    <span id=nombreUsuario1>".$usuarioObjeto->getPer_apellidos()."</span><br/>
                                    <span id=nombreUsuario1>".$usuarioObjeto->getUsu_usuario() ."</span><br/>
                                    <span id=nombreUsuario1>".$usuarioObjeto->getPer_fecha_nac()."</span><br/>
                                    <span id=nombreUsuario1>".$usuarioObjeto->getPer_email() ."</span><br/>
                                    <span id=nombreUsuario1>".$usuarioObjeto->getPer_genero()."</span><br/>                                                            
                                </div>
                            <div class=opciones>
                            <a href=# onclick=><i class=fa fa-users aria-hidden=true></i>&nbsp;Perfil</a>
                            <a href=# onclick=><i class=fa fa-print aria-hidden=true></i>&nbsp;Compras</a>
                            <a href=# onclick=><i class=fa fa-times aria-hidden=true></i>&nbsp;Bloquear</a>
                            <a href=# onclick=><i class=fa fa-cart-plus aria-hidden=true></i>&nbsp;Cesta</a>
                        </div>
                    </div>
                    <a href=usuarios.php>REGRESAR</a>";
                    exit;
            }
            else{
                echo "<div class=contenedor>
                        <div class=contenedorUsuario>
                            <div class=usuario id=usuario1>
                                <h2>Usuario no encontrado</h2> 
                                
                            </div>
                            <a href=usuarios.php>REGRESAR</a>                
                        </div>
                       </div>
                       <script language='javascript'>alert('Usuario no encontrado');</script>";
                exit;
            }
            
        ?>
        <?php include("codigos/javas.php")?>
        <?php include("codigos/footer.php")?>
    </body>
</html>
