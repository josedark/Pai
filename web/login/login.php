<?php
$_GET['textusuario'];
$_GET['contrasena'];

if(isset($_GET['textusuario']) or isset($_GET['contrasena'])){
if(empty($_GET['textusuario']) or empty($_GET['contrasena']))
{
	echo 'escriba la contraseña';
		}
		else {
			
      echo($_GET['textusuario'],$_GET['contrasena']);			
			}

}else
{
echo "error";	
	
	}
?>
