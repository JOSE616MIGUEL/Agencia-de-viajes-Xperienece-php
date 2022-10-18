<?php
    namespace conexion;
    //primero crear las clases para hacer las consulta a la base de datos
    class Administrador{
        //crea las variables
        private $config;
        private $cn = null;
        //crea el constructor
    public function __construct(){

        $this->config = parse_ini_file(__DIR__.'/../config.ini') ;

        $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'],$this->config['clave'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
        
    }
        //crea la función de mostrar por id
        public function login($nombre, $clave){
         
            $sql = "SELECT nombre FROM `administrador` WHERE nombre = :nombre AND clave = :clave ";
            
            $resultado = $this->cn->prepare($sql);
            $_array = array(
                ":nombre" =>  $nombre,
                ":clave" =>  $clave
            );
    
            if($resultado->execute($_array))
                return $resultado->fetch();
    
            return false;
        }
}
    ?>