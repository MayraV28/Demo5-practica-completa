<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>
</head>
<body>
    <form action="guardarProducto.php" method="post">
        <label>Nombre:</label>
        <input type="text" name="nombre">
        <label >Precio:</label>
        <input type="text" name="precio">
        <label >Existencias:</label>
        <input type="number" name="existencias">
        <input type="submit" value="Guardar">
    </form>
</body>
</html>