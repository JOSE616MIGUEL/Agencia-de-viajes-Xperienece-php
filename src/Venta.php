<?php

namespace conexion;

class Venta{

    private $config;
    private $cn = null;

    public function __construct(){

        $this->config = parse_ini_file(__DIR__.'/../config.ini') ;

        $this->cn = new \PDO( $this->config['dns'], $this->config['usuario'],$this->config['clave'],array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
        
    }

    public function registrar($_params){
        $sql = "INSERT INTO `venta`(`nombre`,`apellidos`,`correo`,`telefono`,`total`, `fecha`) 
        VALUES (:nombre,:apellidos,:correo,:telefono,:total,:fecha)";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":nombre" => $_params['nombre'],
            ":apellidos" => $_params['apellidos'],
            ":correo" => $_params['correo'],
            ":telefono" => $_params['telefono'],
            ":total" => $_params['total'],
            ":fecha" => $_params['fecha'],
        );

        if($resultado->execute($_array))
            return $this->cn->lastInsertId();

        return false;
    }

    public function registrarDetalle($_params){
        $sql = "INSERT INTO `detalle_venta`(`venta_id`, `tour_id`, `precio`) 
        VALUES (:venta_id,:tour_id,:precio)";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":venta_id" => $_params['venta_id'],
            ":tour_id" => $_params['tour_id'],
            ":precio" => $_params['preciogeneral'],
        );

        if($resultado->execute($_array))
            return  true;

        return false;
    }
    public function mostrar()
    {
        $sql = "SELECT v.id, nombre, apellidos, correo, telefono, total, fecha FROM venta v ORDER BY v.id DESC;";

        $resultado = $this->cn->prepare($sql);

        if($resultado->execute())
            return  $resultado->fetchAll();

        return false;

    }

    public function mostrarPorId($id)
    {
        $sql = "SELECT v.id, nombre, apellidos, correo, telefono, total, fecha FROM venta v 
        WHERE v.id = :id";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ':id'=>$id
        );

        if($resultado->execute($_array ))
            return  $resultado->fetch();

        return false;
    }

    public function mostrarDetallePorIdPedido($id)
    {
        $sql = "SELECT 
                dv.id,
                t.nombre,
                dv.precio,
                t.foto
                FROM detalle_venta dv
                INNER JOIN tour t ON t.id= dv.tour_id
                WHERE dv.venta_id = :id";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ':id'=>$id
        );

        if($resultado->execute( $_array))
            return  $resultado->fetchAll();

        return false;

    }
    public function eliminar($id){
        $sql = "DELETE FROM `venta` WHERE `id`=:id ";
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
}
?>