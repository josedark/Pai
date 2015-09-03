<html>
<body>
Bienvenido!<br />
<?php 
  echo "Hola " . $_POST["nombre"] . ", Como estas?";
  echo "<br />Tu contrase&ntilde;a era " . $_POST["clave"];
  echo "<br />Quer&iacute;as que te dijera " . $_POST["tipoSaludo"];
  echo "<br />Y en la lista has elegido " . $_POST["posibilidad"];
  echo "<br />Finalmente, en el area de texto has escrito:<br />" . $_POST["texto"];
?>
</body>
</html>
