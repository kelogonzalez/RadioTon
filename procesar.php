<?php 
   include("conecta.php"); 
   $link=Conectarse(); 
   $nombre=$_GET['nombre']; 
   $tipo=$_GET['tipo'];    
   $valor=$_GET['valor'];
   mysql_query("insert into datos (nombre,tipo,valor) values ('$nombre','$tipo','$valor')",$link); 
    
   header("Location: prueba.php"); 
?> 
