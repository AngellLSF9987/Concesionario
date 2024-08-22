<?php
    class Conexion {
        public $conexion;

        public function __construct(){
            $this->conexion=new mysqli("localhost", "root", "");

            //Creamos la base de datos si no existe            
            $this->conexion->query("CREATE DATABASE IF NOT EXISTS concesionario;");

            //Seleccionamos la base de datos
            $this->conexion->select_db("concesionario");            
        }

        public function getConexion(){
            return $this->conexion;
        }

    }   
?>