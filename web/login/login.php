<?php
$_GET['textusuario'];
$_GET['contrasena'];
 phpinfo() ; 
if(isset($_GET['textusuario']) and isset($_GET['contrasena'])){
if(empty($_GET['textusuario']) and  empty($_GET['contrasena']))
{
	echo 'escriba la contraseña';
		}
		else {
			
      echo($_GET['textusuario'],$_GET['contrasena']);
      header('Location:pagina.php');
			}

}else
{
echo "error";	
	
	}
?>
