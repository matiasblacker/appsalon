<?php

function obtenerServicios(){

    try {
        
        //importar credenciales
        require'database.php';
        //consulta sql
        $sql = "SELECT * FROM servicios LIMIT 3;";

        //realizar consulta 
        $consulta = mysqli_query($db, $sql);

        //acceder a los resultados
        return $consulta;

    } catch (\Throwable $th) {
        var_dump($th);
    }
}

obtenerServicios();