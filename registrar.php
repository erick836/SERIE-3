<?php
  include ('Conexion.php');
  $con=new Conexion();
  $nombre=$_GET['nombre'];
  $apellido=$_GET['apellido'];
  $usuario=$_GET['usuario'];
  $clave=$_GET['clave'];	   
   $query="INSERT INTO `contactos`(`nombre`, `apellido`, `usuario`, `contraseña`) VALUES ($nombre,$apellido,$usuario,$clave);";
   $consulta=$con->query($query);
   $con->close();			
?>