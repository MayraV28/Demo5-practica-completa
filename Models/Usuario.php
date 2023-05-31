<?php
class Usuario{
   public function Autenticar($nombreUsuario,$password) {
    include 'conexion.php';
    $conecta=new Conectar(); //Crea la instancia
    $consulta="SELECT * FROM Usuarios 
    WHERE Login=:nombreUsuario AND
    Password=:pass";           
    $query=$conecta->prepare($consulta);
    $query->bindParam(":nombreUsuario",$nombreUsuario,PDO::PARAM_STR);
    $query->bindParam(":pass",$password,PDO::PARAM_STR);
    $query->execute();
    $query->setFetchMode(PDO::FETCH_ASSOC);
    return $query->fetchAll();
   }
}
?>