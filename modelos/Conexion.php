<?php

if (!defined('CONTROLADOR'))
    exit;

class Conexion extends PDO {

    private $tipo_de_base = 'mysql';
    private $host = '127.0.0.1:3306';
    private $nombre_de_base = 'midatabase';
    private $usuario = 'root';
    private $contrasena = '';

    public function __construct() {
        //Sobreescribo el método constructor de la clase PDO.
        try {
            parent::__construct("{$this->tipo_de_base}:dbname={$this->nombre_de_base};host={$this->host};charset=utf8", $this->usuario, $this->contrasena);
        } catch (PDOException $e) {
            echo 'Ha surgido un error y no se puede conectar a la base de datos. Detalle: ' . $e->getMessage();
            exit;
        }
    }

}
