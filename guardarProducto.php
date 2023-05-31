<?php
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$existencias=$_POST['existencias'];
if(!empty($nombre)&& !empty($precio)&& !empty($existencias)){
    require_once 'Models/Producto.php';
    $producto = new Producto();
    $resultado=$producto->InsertarProducto($nombre,
    $precio,$existencias);
    if($resultado){
        header("Location:index.php");
    }
    else{
        header("Location:nuevoProducto.php");
    }
}
else{
    header("Location:nuevoProducto.php");
}
?>