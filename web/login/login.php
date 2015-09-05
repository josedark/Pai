<?php
$_POST['textusuario'];
$_POST['contrasena'];

if(empty($_POST['textusuario']) or empty($_POST['contrasena']))
{
	echo 'escriba la contraseña';
		}
		else {
			
      echo($_POST['textusuario'],$_POST['contrasena']);			
			}


?>
