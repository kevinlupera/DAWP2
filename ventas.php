<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <?php include("codigos/meta.php")?>
        <title>ALLBUY-PRODUCTOS</title>
    </head>
    <body>
        <?php include("codigos/header.php")?>
        <?php include("codigos/nav.php")?>
        <!-- Product grid -->
        <div class="contenedorProductos">
                <table border="2">
                      <?php include("modelo/getProductos.php");
                        $arreglo_productos= obtener_productos();
                        for ($x=1;$x<=count($arreglo_productos); $x++){
                            if($x==1){
                                echo "<tr>";
                            }
                            echo "<td>"; 
                                echo "<div class='sensors' align='center'>";
                                    echo "<img src='imagenes/".$arreglo_productos[$x-1]->getPro_img()."' alt='".$arreglo_productos[$x-1]->getPro_nombre()."' style='width:200px;height:200px; align-content: center;'>";
                                    echo "<h4>".$arreglo_productos[$x-1]->getPro_nombre()."</h4>";
                                    echo "<p>".$arreglo_productos[$x-1]->getPro_descripcion()."<br><b>".$arreglo_productos[$x-1]->getPro_precio()."</b></p>";
                                echo "</div>";
                                echo "<div id='contenedor_anadir_cesta'>";
                                    echo "<form method='post' action='modelo/insertOrden.php' id='form_anadir_cesta'>";
                                        echo "<input type='hidden' name='idproducto' value='".$arreglo_productos[$x-1]->getProducto_id()."'>";
                                        echo "<input type='hidden' name='idusuario' value='".$usuario->getUsu_usuario()."'>";
                                        echo "<input type='hidden' name='precio' value='".$arreglo_productos[$x-1]->getPro_precio()."'>";
                                        echo "<label for='cantidad'>cantidad</label>";
                                        echo "<input type='number' id='b' name='cantidad' value='1' min='1' max='10'>";
                                        echo "<input type='submit' value='añadir a cesta' id='bt_submit'>";
                                    echo "</form>";
                                echo "</div>";
                            echo "</td>";
                            if(($x % 3 )==0 ){
                                echo "</tr>";
                                echo "<tr>";
                            }
                        }
                      ?> 
                </table>
            </div>
        <?php include("codigos/footer.php")?>
    </body>
</html>
