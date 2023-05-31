<?php
$idProducto=$_GET['id'];
include_once 'Models/Producto.php';
$producto=new Producto();
$resultado=$producto->EliminarProducto($idProducto);
if($resultado){
    header('Location:index.php');
}
else{
    header('Location:index.php');
}
?>