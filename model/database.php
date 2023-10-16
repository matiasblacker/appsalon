<?php

$db = mysqli_connect('localhost', 'root', '123456', 'appsalon' );


if(!$db){
    echo'hubo un error al coctarse a la base de datos';
    exit;
}else{
    echo'conexion exitosa';
}

/* echo'<pre>';
var_dump($db);
echo'</pre>'; */
