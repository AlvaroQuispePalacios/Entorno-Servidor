<?php
    //Datos para entrar en la base de datos
    $user = "dwess1234";
    $password = "test1234.";
    $server = "remotehost.es";
    $database = "dwesdatabase";

    //Conexion a la base de datos
    $con = mysqli_connect($server, $user, $password, $database);
                
    // Prueba de conexion a php
    echo '<br>';
    if($con){
        echo "Conexion exitosa a la base de datos";
    }else {
        echo "Conexion fallida a la base de datos";
    }
    echo '<br>'
?>