<?php
    
    define('CONTROLADOR', TRUE);
    
    require_once 'modelos/Personaje.php';
    require_once 'modelos/Cpu.php';
    
    $personajes = Personaje::recuperarTodos();
    $cpus = Cpu::recuperarTodos();
    
    require_once 'vistas/index.php';
    
?>