<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <?php include("codigos/meta.php")?>
        <title>ALLBUY-CESTA</title>
        <!--<style>
           
        </style>-->
        <link rel="stylesheet" href="estilos/estilos2.css"/> 
    </head>
    <body>
        <?php include("codigos/javas.php")?>
        <?php include("codigos/header.php")?>

        <?php include("codigos/nav.php")?> 
        <?php include("modelo/getOrdenes.php");
              include("modelo/getProductos.php");
            $usuario=$_SESSION['usuario'];
            $usuario_id=$usuario->getUsu_usuario();
            $arreglo_ordenes= obtener_ordenes($usuario_id);
        ?>

        <div class="contenedor">
            <section id="contenedorCesta">
                <div id="infoProducto">
                    <h3 id="descripcion">Descripcion</h3>
                    <h3 id="cantidad">Cantidad</h3>
                    <h3 id="precio">Precio</h3>
                    <h3 id="total">Total</h3>
                </div>
            <?php
                $T_total=0.00;
                $T_cantidad=0;
               
                
                for ($x=0;$x<count($arreglo_ordenes); $x++){
                    /*$producto= obtener_productos($arreglo_ordenes[$x]->getProducto_id());*/
                    $producto= obtener_producto($arreglo_ordenes[$x]->getProducto_id());
                    echo "<div class='productoCesta' id='producto".($x+1)."'>";
                        echo "<div class='productoImg'>";
                            echo "<a href='#'><img src='imagenes/".$producto->getPro_img()."' alt='".$producto->getPro_nombre()."' style='height:140px;'></a>";
                            echo "<a href='#' class='productoLink'>".$producto->getPro_nombre()."</a>";
                        echo "</div>";
                        echo "<div class='productoCantidad'>";
                            echo "<form action='' class='formCantidad'>";
                                echo "<span class='valor'>".$arreglo_ordenes[$x]->getCantidad()."</span>";
                                echo "<span class='unidad'> Pieza<span/>";
                            echo "</form>";
                        echo "</div>";
                        echo "<div class='productoPrecio'>";
                            echo "<span class='valor'>$".$arreglo_ordenes[$x]->getPrecio()."<span/>";
                            echo "<span class='separador'>/<span/>";
                            echo "<span class='unidad'>Pieza<span/>";
                        echo "</div>";
                        echo "<div class='productoTotal'>";
                            echo "<span class='valor'>".$arreglo_ordenes[$x]->getTotal()."<span/>";
                            echo "<span class='unidad'>$<span/>";
                        echo "</div>";
                            echo "<div class='btQuitar'>";
                                echo "<a href='modelo/deleteOrden.php?ord=".$arreglo_ordenes[$x]->getOrden_id()."' onclick='quitarProducto(".($x+1).")'><i class='fa fa-times' aria-hidden='true'></i>&nbsp;Quitar</a>";
                            echo "</div>";
                    echo "</div>"; 
                    $T_total = $T_total + $arreglo_ordenes[$x]->getTotal();
                    $T_cantidad = $T_cantidad + $arreglo_ordenes[$x]->getCantidad();
                } 
                round($T_total, 2);
            ?>
                <div id="totalProductos">
                    <h3 id="etiquetatotal">Total</h3>
                    <span id="cantidadProductosTotal"><?php echo $T_cantidad." Items" ?></span>
                    <span id="montoTotal"><?php echo "$".$T_total ?></span>
                </div>
            </section>     
        </div>
        <?php include("codigos/footer.php")?> 
        
    </body>
</html>
