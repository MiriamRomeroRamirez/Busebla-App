<?php

include("conexion.php");

$nombre = $_POST["nombre"];
$apellidos   = $_POST["apellidos"];
$user = $_POST["user"];
$correo = $_POST["correo"];
$contraseña   = $_POST["contraseña"];

//Login
if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM login WHERE correo = '$correo' AND contraseña='$contraseña'");
	$nr = mysqli_num_rows($query);
	
	if($nr==1)
	{
		echo "<script> alert('Bienvenido $correo'); window.location='Busqueda.php' </script>";
	}else
	{
		echo "<script> alert('Usuario no existe'); window.location='index.php' </script>";
	}
}

//Registrar
if(isset($_POST["btnregistrar"]))
{
	$sqlgrabar = "INSERT INTO login(nombre, apellidos, user, correo, contraseña) VALUES ('$nombre','$apellidos','$user','$correo','$contraseña')";
	
	if(mysqli_query($conn,$sqlgrabar))
	{
		echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='index.html' </script>";
	}else 
	{
		echo "Error: ".$sqlgrabar."<br>";
	}
}


?>