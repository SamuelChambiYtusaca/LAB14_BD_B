<?php

if (!defined('CONTROLADOR'))
    exit;

require_once 'Conexion.php';

class Prerequisito {

    private $curso_id_1;
    private $curso_id_2;

    const TABLA = 'pre_requi';
    
    public function __construct($curso_id_1=null, $curso_id_2=null) {
        $this->curso_id_1 = $curso_id_1;
        $this->curso_id_2 = $curso_id_2; 
    }

    public function getcurso_id_1() {
        return $this->curso_id_1;
    }

    public function setcurso_id_1($Id) {
        $this->curso_id_1 = $Id;
    }

    public function getcurso_id_2() {
        return $this->curso_id_2;
    }

    public function setcurso_id_2($id) {
        $this->curso_id_2 = $id;
    }

    public function save() {
        $conexion = new Conexion();
        if ($this->curso_id_1 && $this->curso_id_2){
            $consulta = $conexion->prepare('CALL creaPrer(:Id1, :Id2)');
            $consulta->bindParam(':Id1', $this->curso_id_1);
            $consulta->bindParam(':Id2', $this->curso_id_2);
            $consulta->execute();
        }
        $conexion = null;
    }
}