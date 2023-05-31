<?php
$nombreUsuario=$_POST['nombreUsuario'];
$password=$_POST['password'];
require_once 'Models/Usuario.php';
$usuario=new Usuario();
$resultado=$usuario->Autenticar($nombreUsuario,$password);
if(count($resultado)>0){
    foreach ($resultado as $registro) {  
        session_start();    
        $_SESSION['idUsuario']=$registro['Id'];   
        $_SESSION['nombreUsuario']=$registro['Login']; 
        $_SESSION['tipo']=$registro['Tipo'];    
        header("Location:index.php");
    }
}
?>