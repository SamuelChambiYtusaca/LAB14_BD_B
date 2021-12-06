<?php

if (!defined('CONTROLADOR'))
    exit;

require_once 'Conexion.php';

class Curso {

    private $nombre;
    private $creditos;
    private $depa_id;

    const TABLA = 'cursos';
    
    public function __construct($nombre=null, $creditos=null, $depa_id=null) {
        $this->nombre = $nombre;
        $this->creditos = $creditos; 
        $this->depa_id = $depa_id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCreditos() {
        return $this->creditos;
    }

    public function setCreditos($creditos) {
        $this->creditos = $creditos;
    }

    public function getDepa_id() {
        return $this->depa_id;
    }

    public function setDepa_id($depa_id) {
        $this->depa_id = $depa_id;
    }

    public function save() {
        $conexion = new Conexion();
        if ($this->nombre)
        {
            $consulta = $conexion->prepare('CALL creaCurso(:nombre, :creditos, :depa_id)');
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':creditos', $this->creditos);
            $consulta->bindParam(':depa_id', $this->depa_id);
            $consulta->execute();
        }
        $conexion = null;
    }
}