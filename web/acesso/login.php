<?php 

$maindir = "/";

require_once($maindir."conexion/config.inc.php");

if(empty($_POST['usuario']) && empty($_POST['password']))
{  
  header('Location: '.$maindir.'index.php');
  
}
else
{
  $LoginUsuario = $_POST['usuario'];
  $LoginPassword = $_POST['password'];
  
}
 



try{
	     if (true) {
         
        




       } else {
        

        






       }
       







    }
    catch(PDOExecption $e)
    {
      
      

       exit();
       //die("We are unable to process your request. Please try again later");
    } 

































 ?>