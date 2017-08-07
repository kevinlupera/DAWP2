<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <?php include("codigos/meta.php")?>
        <title>ALLBUY-LOGIN</title>
    </head>
    <body>
        <?php include("codigos/header.php")?>
        <div class="contenedor">                    
            <form method="post" action="loginController.php?op=1&ca=r">
                <label for="usuario">
                    Usuario:
                </label>
                <input type="text" name="usuario" placeholder="Usuario" required/>
                </br>
                <label for="clave">
                    Clave:
                </label>
                <input type="password" name="clave" placeholder="Clave" required/>
                </br>
                <input type="submit" value="Enviar"/>
            </form>   
        </div>
        <?php include("codigos/footer.php")?>
    </body>
</html>
