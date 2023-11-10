<?php

    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "eventos";

    $conexion = new mysqli($servidor, $usuario, $password, $db);

    if ($conexion->connect_error){
        die("conexion fallida ".$conexion->connect_error);

    }
    echo "conexion establecida<br><br>";

    /*$conexion = mysqli_connect($servidor, $ususario, $password);
    if (!$conexion){
        die("error de conecccion");
    }else{
        echo "<center><h1 style='color:blue';>conexion exitosamente bien</h1></center> ";
    }*/



    // crear base de datos
    /*$sql = "CREATE DATABASE eventos";

    if ($conexion->query($sql)===true){
        echo "base de datos creada con exito";
    }else{
        die("No se [pudo crear la base de datos");
    }*/


    // al crear la base de datos para crear la tabla se pone el mnombre en las variables de arriba y en la coneccion 
    //crear tabla

    /*$sql =  "CREATE TABLE invitados(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        nombre VARCHAR(150) NOT NULL,
        apellido VARCHAR (150) NOT NULL,
        fecha DATE
    )";*/

    //crear otra tabla en eventos llamda registro
    $sql =  "CREATE TABLE registro(
        id INT(11) AUTO_INCREMENT PRIMARY KEY,
        invitado_id INT(11) NOT NULL
    )";
    if ($conexion->query($sql)===true){
        echo "tabla de registro creada con exito";
    }else{
        die("tabla NO creada con exito".$conexion->error);
    }


?>