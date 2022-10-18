<?php
    namespace conexion;
    //primero crear las clases para hacer las consulta a la base de datos
    class Pasajero{
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
        $sql = "INSERT INTO `pasajero`(`rut`, `nombre`, `apellidos`, `telefono`, `correo`, `direccion`, `edad`, `nacionalidad`) 
        VALUES (:rut,:nombre,:apellidos,:telefono,:correo,:direccion,:edad,:nacionalidad)";

        $resultado = $this->cn->prepare($sql);
        //crea el array list para concatenar el ingresado en input
        $_array = array(
            ":rut" => $_params['rut'],
            ":nombre" => $_params['nombre'],
            ":apellidos" => $_params['apellidos'],
            ":telefono" => $_params['telefono'],
            ":correo" => $_params['correo'],
            ":direccion" => $_params['direccion'],
            ":edad" => $_params['edad'],
            ":nacionalidad" => $_params['nacionalidad'],
        );
        //validación de la variable resultado
        if($resultado->execute($_array))
            return true;

        return false;
    }

    //crea la función de actualizar
    
    public function actualizar($_params){
        //variable sql donde hace la sentencia
        $sql = "UPDATE `pasajero` SET `rut`=:rut,`nombre`=:nombre,`apellidos`=:apellidos,
        `telefono`=:telefono,`correo`=:correo,`direccion`=:direccion,`edad`=:edad,`nacionalidad`=:nacionalidad WHERE `id`=:id";

        $resultado = $this->cn->prepare($sql);
        //crea el array list para concatenar el ingresado en input
        $_array = array(
            ":rut" => $_params['rut'],
            ":nombre" => $_params['nombre'],
            ":apellidos" => $_params['apellidos'],
            ":telefono" => $_params['telefono'],
            ":correo" => $_params['correo'],
            ":direccion" => $_params['direccion'],
            ":edad" => $_params['edad'],
            ":nacionalidad" => $_params['nacionalidad'],
            ":id" =>  $_params['id']
        );
        //validación de la variable resultado
        if($resultado->execute($_array))
            return true;

        return false;
    }
    //crea la función de mostrar por id
    public function mostrarPorId($id){
        
        $sql = "SELECT * FROM `pasajero` WHERE `id`=:id ";
        
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
        $sql = "SELECT * FROM pasajero; 
        
        ";
        
        $resultado = $this->cn->prepare($sql);

        if($resultado->execute())
            return $resultado->fetchAll();

        return false;
    }
    
    //crea la función de eliminar
    public function eliminar($id){
        $sql = "DELETE FROM `pasajero` WHERE `id`=:id ";
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
