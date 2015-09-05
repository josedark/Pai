<?php
$nombre= $_POST["textusuario"];
$pass= $_POST['contrasena'];

if(empty($usuario) or empty($pass)){
header("Location: index.php");
exit();
} 
 
 
 $dbconn = pg_connect("host= ec2-54-225-102-235.compute-1.amazonaws.com dbname=db0iq2atr12u3q user=nxlaeioyrwqiqr password= Mv3CDNF4Eu3pHQdToGFZJl3Q6S")
    or die('No se ha podido conectar: ' . pg_last_error());
 echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";





$result = pg_query("SELECT * from usuario where usuario='" .$nombre . "'");

if($row = pg_fetch_array($result)){
if($row['contrasena'] == $pass){
session_start();
$_SESSION['usuario'] = $nombre;
header("Location: login/pagina.php");
}else{
header("Location: index.php");
exit();
}
}else{
header("Location: index.php");
exit();
}


 
 
