<?php
    
    define('CONTROLADOR', TRUE);
    
    require_once 'modelos/Curso.php';
    $curso = new Curso();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : null;
        $creditos = (isset($_POST['creditos'])) ? $_POST['creditos'] : null;
        $depa_id4 = (isset($_POST['depa_id'])) ? $_POST['depa_id'] : null;
        $curso->setNombre($nombre);
        $curso->setcreditos($creditos);
        $curso->setDepa_id($depa_id);
        $curso->save();
        header('Location: index.php');
    }else{
        include 'vistas/guardar_curso.php';
    }
    
?>