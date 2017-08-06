<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include("codigos/meta.php")?>
        <title>ALLBUY-FACTURACION</title>
    </head>
    <body>
        <?php include("codigos/header.php")?>
        <?php include("codigos/nav.php")?>
        <div class="contenedor-fact">
            <section id='contenedor'>
            <section class="uno">
                <div class="principal">
                    <h2><i>"Consigue los mejores productos al menor costo"</i></h2>
                    <img src="" alt=""/>
                </div>
            </section>
            <section class="dos">
                <div class="secundaria">
                    <p></p>
                    <img src="" alt=""/>
                </div>
            </section>
            </section>
            <aside id="barraLateral">
                <h3>Datos de la Factura</h3>
                <form method="post" action="" onsubmit="">
                    <label for="lbl_idcliente"><h5>Cedula o RUC:</h5></label>
                    <input type="text" name="idCliente" id="campo_idCliente" onkeypress="validaSoloNumeros()" maxlength="10"/><br/>
                    <label for="correo"><h5>Nombre del Cliente:</h5></label>
                    <input type="text" name="nombre" id="campo_nombreCliente" onkeypress="validaSoloLetras()"><br/>
                    <label for="claveUsuario"><h5>Direccion:</h5></label>
                    <input type="text" name="direccion" id="campo_dirCliente" onkeypress="validaLetrasNumeros()"><br/>
                    <label for="claveUsuario"><h5>Telefono:</h5></label>
                    <input type="text" name="telefono" id="campo_telCliente" onkeypress="validaSoloNumeros()" maxlength="10"><br/>

                    <input type="submit" value="Registrar" name="botonRegistrar">
                    <input type="reset" value="Limpiar">
                </form>
            </aside>
        </div>
        <?php include("codigos/javas.php")?>
        <?php include("codigos/footer.php")?>
    </body>
</html>
