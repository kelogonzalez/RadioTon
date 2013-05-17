<?php 
   include("conecta.php"); 
   $link=Conectarse(); 
   //$result=mysql_query("select * from datos",$link); 

	$sql = 'SELECT sum(valor ) as sumas FROM datos';  
	$resultado = mysql_query($sql); 
	$registro = mysql_fetch_array($resultado); 

	echo $registro['sumas'];  




?>
