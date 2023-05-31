<?php
session_start();
if(isset($_SESSION['nombreUsuario'])){
    $usuarioSesion=$_SESSION['nombreUsuario'];
    $tipoSesion=$_SESSION['tipo'];
}
else{
    $usuarioSesion='';
    $tipoSesion='';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de productos</title>
    <script type="text/javascript">
        function eliminar_id(id){
            if(confirm('¿Quieres eliminar?')){
                window.location.href=
                'eliminarProducto.php?id='+id;
            }
        }
        function editar_id(id){
            if(confirm('¿Quieres editar?')){
                window.location.href='editarProducto.php?id='+id;
            }
        }
    </script>
</head>
<body>
    <?php
        if($usuarioSesion<>''){
            echo '<label>'.$usuarioSesion.'</label>';
            echo '<a href="logout.php">Cerrar Sesion</a>';
        }
        else{
            echo '<a href="login.php">iniciar Sesion</a>';
        }
    ?>
    <h1>Lista de productos</h1>
    <div>
        <a href="nuevoProducto.php">Nuevo</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'Models/Producto.php';
                    $producto=new Producto();
                    $resultado=$producto->ObtenerProductos();
                    if(count($resultado)>0){
                        foreach ($resultado as $registro) {
                        echo '<tr>';
                        echo '<td>'.$registro['Id'].'</td>';
                        echo '<td>'.$registro['Nombre'].'</td>';
                        echo '<td>'.$registro['Precio'].'</td>';
                        echo '<td>'.$registro['Existencias'].'</td>';
                        echo '<td>
                            <a href="javascript:eliminar_id
                            ('.$registro['Id'].')">ELIMINAR</a>
                            <a href="javascript:editar_id
                            ('.$registro['Id'].')">EDITAR</a>
                        </td>';
                        echo '</tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>