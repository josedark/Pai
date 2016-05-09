<?php

require_once("conn.php");

$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

  try
  {

    $db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8',$username, $password, $options);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

  }
  catch(PDOException $ex)
  {
    die("Error al tratar de conectase al servidor, por favor contacte al administrador del sistema ". $ex->getMessage());
  }

 
   

  
?>