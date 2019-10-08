<?php 
include 'db.php';
 $nombre=$_POST['nombre'];
 $apellido=$_POST['apellido'];

 $inser=("INSERT INTO personas(nombre,apellidos) VALUES ('$nombre','$apellido')");

$result=mysqli_query($conex,$inser);
header('Location: agregar.php');
?>