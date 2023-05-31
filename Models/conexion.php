<?php
    class Conectar extends PDO{
        private $hostBD='localhost:3307'; //Habilitar para el caso de mariaDB
        //private $hostBD='localhost';
        private $nombreBD='almacen';
        private $usuarioBD='root';
        private $passwordBD='';
        public function __construct(){
            try {
                parent::__construct('mysql:host='.$this->hostBD.';
                dbname='.$this->nombreBD.';charset=utf8',$this->
                usuarioBD,$this->passwordBD,array(PDO::ATTR_ERRMODE
                =>PDO::ERRMODE_EXCEPTION));
            } catch (Exception $e) {
                echo '<script>console.log('.$e.');
                 </script>';
                exit;
                
            }
        }
    }
?>