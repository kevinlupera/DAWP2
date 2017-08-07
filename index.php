<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="es">
    <head>
        <title>ALLBUY</title>
        <?php include("codigos/meta.php")?>
    </head>
    <body class="inicio">
        <?php include("codigos/header.php")?>
        <?php include("codigos/nav.php")?>
<h1>"Version 1.0"</h1>
        <section id='contenedor'>
            <section class="uno">
                <div class="principal">
                    <h2><i>"Consigue los mejores productos al menor costo"</i></h2>
                    <img src="imagenes/banner2.jpg" alt="Bienvenida"/>
                </div>
            </section>
            <section class="dos">
                <div class="secundaria">
                    <p></p>
                    <img src="imagenes/banner.jpg" alt="Banner Publicitario" width="99%" height="100%"/>
                </div>
            </section>
        </section>
        <aside id='barraLateral'>
            <h3>Registrate</h3>
            <form method="post" action="Controladores/registroControl.php" onsubmit="return validacionFormularioRegistro()">
                <label for="idUsuario">Usuario:</label><br/>
                <input type="text" name="idUsuario" id="campoIdUsuario" onkeypress="validaSoloLetras()"
                       placeholder="Usuario" required/><br/>
                <label for="nombreUsuario">Nombre:</label><br/>
                <input type="text" name="nombreUsuario" id="campoNombreUsuario" onkeypress="validaSoloLetras()"
                       placeholder="Nombre" required/><br/>
                <label for="apellidoUsuario">Apellido:</label><br/>
                <input type="text" name="apellidoUsuario" id="campoApellidoUsuario" onkeypress="validaSoloLetras()"
                       placeholder="Apellido" required/><br/>
                <label for="cedulaUsuario">Cedula:</label><br/>
                <input type="text" name="cedulaUsuario" id="campoCedulaUsuario" onkeypress="validaSoloNumeros()" maxlength="10"
                       placeholder="1234567890" required/><br/>
                <label for="correo"> E-mail:</label><br/>
                <input type="email" name="correo" id="campoEmail" placeholder="email@example.com" required><br/>
                <label for="claveUsuario">Contraseña de usuario:</label><br/>
                <input type="password" name="claveUsuario" id="campoContrasenia" placeholder="Clave" required><br/>
                <label for="claveUsuario">Confirmar contraseña:</label><br/>
                <input type="password" name="claveUsuario" id="campoContrasenia2" placeholder="Clave" required><br/>
                <label for="radio">Genero:</label><br/>
                <input type="radio" name="genero" value="hombre" class="btRadio"><label>Masculino</label><br/>
                <input type="radio" name="genero" value="mujer" class="btRadio"><label>Femenino</label><br/>
                <input type="radio" name="genero" value="otro" class="btRadio"><label>Otro</label><br/>
                <label for="fechaNacimiento">Fecha de Nacimiento:</label><br/>
                <input type="date" name="fechaNacimiento" min="1930-01-01" max="2002-12-31" id="campoFechaNac"
                        required><br/>
                <input type="submit" value="Registrar" name="botonRegistrar" class="botonForm">
                <input type="reset" value="Limpiar" class="botonForm">
            </form>
        </aside>
        <?php include("codigos/javas.php")?>
        <?php include("codigos/footer.php")?>
    </body>
</html>
