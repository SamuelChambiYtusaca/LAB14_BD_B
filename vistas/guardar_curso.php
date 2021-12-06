<?php if (!defined('CONTROLADOR')) exit; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title> INSERTAR CURSO </title>
    </head>
    <body>
        <h1> INSERTAR CURSO </h1>
        <form method="post" action="guardar_Curso.php">
            <label for="nombre">Nombre: </label>
            <br />
            <input type="text" name="nombre" id="nombre" value="" required />
            <br />
            <label for="creditos">Creditos: </label>
            <br />
            <input type="text" name="creditos" id="creditos" value="" required />
            <br />  
            <label for="depa_id">Departamento: </label>
            <br />
            <input type="text" name="depa_id" id="depa_id" value="" required />
            <br />           
            <input type="submit" value="Guardar" />
            <a href="index.php"> Cancelar </a>
        </form>
    </body>
</html>