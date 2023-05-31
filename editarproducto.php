<?php
$idProducto=$_GET['id'];
if(isset($_GET['id'])){
    require_once 'Models/Producto.php';
    $producto=new Producto();
    $datos=$producto->ObtenerProductoId($idProducto);
    if(count($datos)>0){
        foreach ($datos as $item) {
            $nombre=$item['Nombre'];
            $precio=$item['Precio'];
            $existencia=$item['Existencias'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
</head>
<body>
<form action="modificarProducto.php" method="post">
        <label>Id:</label>
        <input type="text" name="id" value="<?php echo $idProducto ?>" readonly>
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre ?>">
        <label >Precio:</label>
        <input type="text" name="precio" value="<?php echo $precio ?>">
        <label >Existencias:</label>
        <input type="number" name="existencias" value="<?php echo $existencia ?>">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>