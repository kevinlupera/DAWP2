<?php
require_once 'model/Conexion.php';
require_once 'model/productos/Producto.php';
require_once 'model/productos/Orden.php';

class productoModel {
private $db;
    public function __construct() {
        try {
            $this->db = Conexion::getConexion();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function obtenerProductos() {
            try{
             $sentencia = $this->db->prepare("SELECT * FROM tienda.producto");
             $sentencia->execute();
              $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Producto');
              return $resultset;
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
    public function obtenerProductosxId($id) {
            try{
             $sentencia = $this->db->prepare("SELECT * FROM tienda.producto where producto_id="
                     . $id);
             $sentencia->execute();
              $resultset = $sentencia->fetchAll(PDO::FETCH_CLASS, 'Producto');
              return $resultset[0];
            }catch(Exception $e){
                die($e->getMessage());
            }
        }
        
    public function insertarProductos(Orden $orden){
       
            try{
             $sentencia = $this->db->prepare("insert into ordenes "
                     ." (producto_id, usuario_id, precio, cantidad, total, orden_estado"
                     . ") values(?,?,?,?,?,?)");
           $r=  $sentencia->execute(array(
                 $orden->getProducto_id(),
                 $orden->getOrden_id(),
                 $orden->getPrecio(),
                 $orden->getCantidad(),
                 $orden->getTotal(),
                 $orden->getOrden_estado(),
             ));
            }catch(Exception $e){
                die($e->getMessage());
            }
            
        
    }
}
