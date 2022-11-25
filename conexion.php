<?php
    $dbhost="localhost:3307";
    $dbuser ="root";
    $dbpass="MRR261";
    $dbname="buseblacorrecto";

    $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );

    if(!$conn){
        die("No hay conexion:" .mysqli_connect_error());
    }
?>
