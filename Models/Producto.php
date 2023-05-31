<?php
    class Producto{
        public function ObtenerProductos(){
            include 'conexion.php'; //Llama al archivo
            $conecta=new Conectar(); //Crea la instancia
            $consulta="SELECT * FROM Productos";
            $query=$conecta->prepare($consulta);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return $query->fetchAll();
        }
        public function InsertarProducto($nombre,$precio,$existencias){
           try {
             include 'conexion.php';
             $conecta=new Conectar();
             $consulta=$conecta->prepare("INSERT INTO
             Productos(Nombre,Precio,Existencias)
             VALUES(:nombre,:precio,:existencias)");
             $consulta->bindParam(":nombre",$nombre,PDO::PARAM_STR);
             $consulta->bindParam(":precio",$precio,PDO::PARAM_STR);
             $consulta->bindParam(":existencias",$existencias,PDO::PARAM_STR);
             $consulta->execute();
             return true;
           } catch (Exception $e){
                return false;
           } 
        }
        public function EliminarProducto($id){
            include 'conexion.php';
            $conectar=new Conectar();
            $consulta=$conectar->prepare("DELETE FROM
            Productos where Id=:id");
            $consulta->bindParam(":id",$id,PDO::PARAM_STR);
            $consulta->execute();//Aqui se ejecuta
            return true;
        }
        public function ObtenerProductoId($id){
            include 'conexion.php'; //Llama al archivo
            $conecta=new Conectar(); //Crea la instancia
            $consulta="SELECT * FROM Productos WHERE Id=:id";           
            $query=$conecta->prepare($consulta);
            $query->bindParam(":id",$id,PDO::PARAM_STR);
            $query->execute();
            $query->setFetchMode(PDO::FETCH_ASSOC);
            return $query->fetchAll();
        }
        public function ModificarProducto($id,$nombre,$precio,$existencias){
            try {
                include 'conexion.php';
                $conecta=new Conectar();
                $consulta=$conecta->prepare("UPDATE Productos
                set Nombre=:nombre,Precio=:precio, Existencias=:existencias
                where Id=:id");
                $consulta->bindParam(":id",$id,PDO::PARAM_STR);
                $consulta->bindParam(":nombre",$nombre,PDO::PARAM_STR);
                $consulta->bindParam(":precio",$precio,PDO::PARAM_STR);
                $consulta->bindParam(":existencias",$existencias,PDO::PARAM_STR);
                $consulta->execute();
                return true;
              } catch (Exception $e){
                   return false;
              } 
        }
    }
?>