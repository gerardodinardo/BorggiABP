<?php
//fichero ue tendrá todas las funciones relacionadas con la base de datos.

session_start();

//abrir la base de datos. 
function openDB()
{

    //credencials per a accedir a la base de dades.
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=hoteles_dwes_control;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $conn;
}

//cuando se confirma la incidencia. 
function InsertarConsulta(){



}



function 
?>