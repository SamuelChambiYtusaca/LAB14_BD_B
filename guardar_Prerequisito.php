<?php
    
    define('CONTROLADOR', TRUE);
    
    require_once 'modelos/Prerequisito.php';
    $pre = new Prerequisito();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Id1 = (isset($_POST['Id1'])) ? $_POST['Id1'] : null;
        $Id2 = (isset($_POST['Id2'])) ? $_POST['Id2'] : null;
        $pre->setcurso_id_1($Id1);
        $pre->setcurso_id_2($Id2);
        $pre->save();
        header('Location: index.php');
    }else{
        include 'vistas/guardar_prerequisito.php';
    }
    
?>