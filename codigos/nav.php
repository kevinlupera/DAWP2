<!DOCTYPE html>
        <nav>
            <div class="barra-navegacion">
                <div class="desplegar">
                <button class="btDesplegable"><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;Categorias</button>
                <div class="contenDesple">
                  <a href="#">BOARDS</a>
                  <a href="#">SHIELDS</a>
                  <a href="#">SENSORS</a>
                  
                </div>
              </div>
                <a id="inicio" href="../index.php" class="item"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Inicio</a>
                <a id="login" href="../Controladores/loginController.php?op=2" class="item"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;Login</a>
                <a id="cesta" href="../modelo/cesta.php" class="item"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Cesta</a>
                <a id="ventas" href="../modelo/ventas.php" class="item"><i class="fa fa-cubes" aria-hidden="true"></i>&nbsp;Productos</a>
                <a id="facturacion" href="../modelo/facturacion.php" class="item"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;Facturacion</a>
                <a id="reportes" href="../modelo/reportes.php" class="item"><i class="fa fa-line-chart" aria-hidden="true"></i>&nbsp;Reportes</a>
                <a id="usuarios" href="../modelo/usuarios.php" class="item"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Usuarios</a>
                <?php
                    include("../modelo/Usuario.php");
                    session_start();
                    $usuario=$_SESSION['usuario'];
                    if($usuario==null || !isset($usuario) || empty($usuario)){
                    header("Location:../view/login.php");
                    }
                    else{
                        echo " <script>
                            document.getElementById('login').innerHTML = 'SALIR';
                        </script>";
                    }?>
                <strong style=" float: right; color: white; margin-right: 10px;">
                    <?php echo "Bienvenido: ".$usuario->getPer_nombres();?></strong>
            </div>
        </nav>
