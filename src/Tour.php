<?php
    namespace conexion;
    //primero crear las clases para hacer las consulta a la base de datos
    class Tour{
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
    //crear la función de registrar
    public function registrar($_params){
        //variable sql donde hace la sentencia
        $sql = "INSERT INTO `tour`(`codigo`, `foto`, `nombre`, `preciogeneral`, `horasalida`, `horallegada`, `descripcionitinerario`, `descripciongeneral`) 
        VALUES (:codigo,:foto,:nombre,:preciogeneral,:horasalida,:horallegada,:itinerario,:general)";

        $resultado = $this->cn->prepare($sql);
        //crea el array list para concatenar el ingresado en input
        $_array = array(
            ":codigo" => $_params['codigo'],
            ":foto" => $_params['foto'],
            ":nombre" => $_params['nombre'],
            ":preciogeneral" => $_params['preciogeneral'],
            ":horasalida" => $_params['horasalida'],
            ":horallegada" => $_params['horallegada'],
            ":itinerario" => $_params['itinerario'],
            ":general" => $_params['general'],
        );
        //validación de la variable resultado
        if($resultado->execute($_array))
            return true;

        return false;
    }

    //crea la función de actualizar
    
    public function actualizar($_params){
        //variable sql donde hace la sentencia
        $sql = "UPDATE `tour` SET `codigo`=:codigo,`foto`=:foto,`nombre`=:nombre,`preciogeneral`=:preciogeneral,`horasalida`=:horasalida,`horallegada`=:horallegada, `descripcionitinerario`=:itinerario, `descripciongeneral`=:general  WHERE `id`=:id";

        $resultado = $this->cn->prepare($sql);
        //crea el array list para concatenar el ingresado en input
        $_array = array(
            ":codigo" => $_params['codigo'],
            ":foto" => $_params['foto'],
            ":nombre" => $_params['nombre'],
            ":preciogeneral" => $_params['preciogeneral'],
            ":horasalida" => $_params['horasalida'],
            ":horallegada" => $_params['horallegada'],
            ":itinerario" => $_params['itinerario'],
            ":general" => $_params['general'],
            ":id" =>  $_params['id']
        );
        //validación de la variable resultado
        if($resultado->execute($_array))
            return true;

        return false;
    }
    //crea la función de mostrar por id
    public function mostrarPorId($id){
        
        $sql = "SELECT * FROM `tour` WHERE `id`=:id ";
        
        $resultado = $this->cn->prepare($sql);
        $_array = array(
            ":id" =>  $id
        );

        if($resultado->execute($_array))
            return $resultado->fetch();

        return false;
    }
    public function mostrar(){
        //sentencia sql para hacer la consulta a la base mde datos
        $sql = "SELECT * FROM tour";
        
        $resultado = $this->cn->prepare($sql);

        if($resultado->execute())
            return $resultado->fetchAll();

        return false;
    }
    
    //crea la función de eliminar
    public function eliminar($id){
        $sql = "DELETE FROM `tour` WHERE `id`=:id ";
        //variable sql donde hace la sentencia
        $resultado = $this->cn->prepare($sql);
         //crea el array list para concatenar el ingresado en input
        $_array = array(
            ":id" =>  $id
        );

        if($resultado->execute($_array))
            return true;

        return false;
    }
    //crear la función de mostrar

    }
    
?>
