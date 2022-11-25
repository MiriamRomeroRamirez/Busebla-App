<?php  
include("conexion.php");
// Llamando a los campos

$nombre = $_POST["nombre"];

$comentario= $_POST["comentario"];
 

$nombre= mysqli_real_escape_string($conn,$nombre);
$comentario= mysqli_real_escape_string($conn,$comentario);
$resultado=mysqli_query($conn,'INSERT INTO comentarios (nombre, comentario) VALUES ("'.$nombre.'", "'.$comentario.'")');
echo "<script> alert('Tu comentario se ha agregado al foro'); window.location='comentario.php' </script>";





?>