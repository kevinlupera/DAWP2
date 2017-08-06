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
        <style>
            *{
                margin: 0;
            }
            #contenedorCesta{
                padding: 15px;
                height: auto;
            }
            
            
            #infoProducto,.productoCesta{
                display: block;
                width: 98%;
                margin: auto;
                padding: 1%;
            }
            
            #infoProducto h3{
                display: inline-block;
            }
            
            #descripcion{
                width: 40%;
            }
            
            #cantidad, #precio{
                width: 25%;
            }
            
            .productoCesta{
                border-bottom: 1px solid gray;
                border-top:  1px solid gray;
                margin-top: 5px;
            }
            
            .productoImg,.productoCantidad,.productoPrecio,.btQuitar{
                display: inline-block;
                vertical-align: top;
                
            }
            .productoImg{
                width: 40%;
            }
            .productoLink{
                vertical-align: top;
                text-decoration: underline;
                color: black;
                margin-left: 10px;
            }
            
            .productoLink:hover{
                color: orangered;
            }
            .productoCantidad, .productoPrecio{
                width: 25%;
            }

            .formCantidad{
                margin: 0px;
            }
            .formCantidad input{
                display: inline-block;
                width: 50px;
            }
            
            .btQuitar{
                width: 8%;
                text-align: right;
            }
            .btQuitar a{
                text-decoration: none;
                color: gray;
            }
            .btQuitar a:hover{
                color: orangered;
            }
            
            #totalProductos{
                height: 40px;
                padding: 10px;
            }
            #etiquetatotal,#cantidadProductosTotal,#montoTotal{
                display: inline-block;
                font-weight: bold;
            }
            
            #etiquetatotal{
                width: 45%;
            }
            #cantidadProductosTotal, #montoTotal{
                width: 25%;
            }
        </style>
    </head>
    <body>
        <?php include("codigos/header.php")?>
        <?php include("codigos/nav.php")?>
        
        <div class="contenedor">
            <section id="contenedorCesta">
                <div id="infoProducto">
                    <h3 id="descripcion">Descripcion</h3>
                    <h3 id="cantidad">Cantidad</h3>
                    <h3 id="precio">Precio</h3>
                </div>
                <div class="productoCesta" id="producto1">
                    <div class="productoImg">
                        <a href="#"><img src="imagenes/arduinoR1.jpg" alt="Arduino uno" style="height:140px;"></a>
                        <a href="#" class="productoLink">Arduino uno</a>
                    </div>
                    <div class="productoCantidad">
                        <form action="" class="formCantidad">
                            <input type="number" name="quantity" min="0" max="10" value="0">
                            <span class="unidad">Pieza<span/>
                        </form>
                        
                    </div>
                    <div class="productoPrecio">
                        <span class="valor">US $xx.xx<span/>
                        <span class="separador">/<span/>
                        <span class="unidad">Pieza<span/>
                    </div>
                    <div class="btQuitar">
                        <a href="#" onclick="quitarProducto(1)"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Quitar</a>
                    </div>
                </div>
                <div class="productoCesta" id="producto2">
                    <div class="productoImg">
                        <a href="#"><img src="imagenes/arduinoR1.jpg" alt="Arduino uno" style="height:140px;"></a>
                        <a href="#" class="productoLink">Arduino uno</a>
                    </div>
                    <div class="productoCantidad">
                        <form action="" class="formCantidad">
                            <input type="number" name="quantity" min="0" max="10" value="0">
                            <span class="unidad" id="">Pieza<span/>
                        </form>
                        
                    </div>
                    <div class="productoPrecio">
                        <span class="valor">US $xx.xx<span/>
                        <span class="separador">/<span/>
                        <span class="unidad">Pieza<span/>
                    </div>
                    <div class="btQuitar">
                        <a href="#" onclick="quitarProducto(2)"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Quitar</a>
                    </div>
                </div>
                <div class="productoCesta" id="producto3">
                    <div class="productoImg">
                        <a href="#"><img src="imagenes/arduinoR1.jpg" alt="Arduino uno" style="height:140px;"></a>
                        <a href="#" class="productoLink">Arduino uno</a>
                    </div>
                    <div class="productoCantidad">
                        <form action="" class="formCantidad">
                            <input type="number" name="quantity" min="0" max="10" value="0">
                            <span class="unidad" id="">Pieza<span/>
                        </form>
                        
                    </div>
                    <div class="productoPrecio">
                        <span class="valor">US $xx.xx<span/>
                        <span class="separador">/<span/>
                        <span class="unidad">Pieza<span/>
                    </div>
                    <div class="btQuitar">
                        <a href="#" onclick="quitarProducto(3)"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Quitar</a>
                    </div>
                </div>
                <div class="productoCesta" id="producto4">
                    <div class="productoImg">
                        <a href="#"><img src="imagenes/arduinoR1.jpg" alt="Arduino uno" style="height:140px;"></a>
                        <a href="#" class="productoLink">Arduino uno</a>
                    </div>
                    <div class="productoCantidad">
                        <form action="" class="formCantidad">
                            <input type="number" name="quantity" min="0" max="10" value="0">
                            <span class="unidad" id="">Pieza<span/>
                        </form>
                        
                    </div>
                    <div class="productoPrecio">
                        <span class="valor">US $xx.xx<span/>
                        <span class="separador">/<span/>
                        <span class="unidad">Pieza<span/>
                    </div>
                    <div class="btQuitar">
                        <a href="#" onclick="quitarProducto(4)"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;Quitar</a>
                    </div>
                </div>
                <div id="totalProductos">
                    <h3 id="etiquetatotal">Total</h3>
                    <span id="cantidadProductosTotal">xxx</span>
                    <span id="montoTotal">US $xxx.xx</span>
                </div>
            </section>
        </div>
        <?php include("codigos/footer.php")?>
        <script src="funciones/funciones.js" type="text/javascript">
            
        </script>
    </body>
</html>
