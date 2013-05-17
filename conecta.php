<!-- Conexion a la Base de datos --> 
<html> 
<head> 
   <title>RadioTON</title> 
</head> 
<body> 
<?php 
function Conectarse() 
{ 
   if (!($link=mysql_connect("localhost","kelo","genesis2012"))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("radio",$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
   return $link; 
} 

$link=Conectarse(); 
//echo "Conectado satisfactoriamente.<br>"; 

mysql_close($link); //cierra la conexion 
?> 

</body> 
</html>