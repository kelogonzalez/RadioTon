<!-- Software de Donaciones de RadioTON --> 
<!DOCTYPE html> 
<head> 
   <meta charset="utf-8" />
   <title>RadioTON</title> 
   <link rel="stylesheet" media="all" href="estilos.css"/>
   <link rel="stylesheet" media="all" href="normalize.css"/>
   <style type="text/css">
        *{padding:0;margin:0;border:0;}
        #diapos-on{border:10px solid #FBFBFB;-moz-box-shadow:0px 2px 20px #000;-webkit-box-shadow:0px 2px 20px #000;box-shadow:0px 2px 20px #000;width:700px;height:350px;margin:5em auto 0;position:relative;}
        #diapos-on li{position:absolute;top:0;left:0;width:700px;height:350px;list-style:none;}
        #contador{width:700px;margin:1em auto 0;}
        #contador li{float:left;width:10px;height:10px;margin-right:5px;list-style:none;-moz-box-shadow:0 1px 4px #000;-webkit-box-shadow:0 1px 4px #000;box-shadow:0 1px 4px #000;}
        #contador li a{display:block;text-indent:-999em;background:#000000;width:10px;height:10px;overflow:hidden;}
        #contador li a:focus{outline:1px solid #F9D8E3;}
        #contador li.actual a{background:#f9f9f9;}
    </style>
   <script type="text/javascript" src="DP.js"></script>
        <script type="text/javascript">
        window.onload = DP.inicio;
    </script> 
<SCRIPT languaje="JavaScript">
function pulsar() {
alert("Dato Guardado con Satisfacción - Feliz Navidad");
}

</SCRIPT>


</head> 
<body>
<h2> GAD MUNICIPAL DEL CANTÓN NARANJAL</h2>
<h3>Software de Donaciones de la RadioTON</h3> 
<FORM ACTION="procesar.php"> 
<section id="Registro">
<TR> 
   <TD><b>Donante:</TD> 
   <TD><INPUT TYPE="text" NAME="nombre" SIZE="33" MAXLENGTH="100"></TD> 
</TR> 
<TR> 
   <select name="tipo">
<option>Efectivo</option>
<option>Transferencia</option>
<option>Cheque</option>
</select>
</TR> 
<TR> 
   <TD><b>Valor:</TD> 
   <TD><INPUT TYPE="int" NAME="valor" SIZE="12" MAXLENGTH="30"></TD> 
</TR> 
<INPUT TYPE="submit" NAME="accion" VALUE="Grabar" ONCLICK="pulsar()"> 
</section>

</FORM> 
<section id="gran">
<p> GRAN TOTAL </p>
</section>
<section id="total">
<?php 
   include("conecta.php"); 
   $link=Conectarse(); 
   //$result=mysql_query("select * from datos",$link); 

   $sql = 'SELECT sum(valor ) as sumas FROM datos';  
   $resultado = mysql_query($sql); 
   $registro = mysql_fetch_array($resultado); 

   echo "$ ", $registro['sumas'];  

?>
</section>

<ul id="diapos">
        <li><img src="1.jpg" alt="" width="700" height="350" /></li>
        <li><img src="2.jpg" alt="" width="700" height="350" /></li>
        <li><img src="3.jpg" alt="" width="700" height="350" /></li>
        <li><img src="4.jpg" alt="" width="700" height="350" /></li>
        <li><img src="5.jpg" alt="" width="700" height="350" /></li>
        <li><img src="6.jpg" alt="" width="700" height="350" /></li>
        <li><img src="7.jpg" alt="" width="700" height="350" /></li>
        <li><img src="8.jpg" alt="" width="700" height="350" /></li>
        <li><img src="9.jpg" alt="" width="700" height="350" /></li>
        <li><img src="10.jpg" alt="" width="700" height="350" /></li>
    </ul>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>


<!--
<section id="navidad">

</section>
<?php

$link = @mysql_connect("localhost", "kelo", "genesis2012");
mysql_select_db("radio", $link);

// maximo por pagina
$limit = 5;

// pagina pedida
$pag = (int) $_GET["pag"];
if ($pag < 1)
{
   $pag = 1;
}
$offset = ($pag-1) * $limit;


$sql = "SELECT SQL_CALC_FOUND_ROWS nombre, tipo, valor FROM datos LIMIT $offset, $limit";
$sqlTotal = "SELECT FOUND_ROWS() as total";

$rs = mysql_query($sql);
$rsTotal = mysql_query($sqlTotal);

$rowTotal = mysql_fetch_assoc($rsTotal);
// Total de registros sin limit
$total = $rowTotal["total"];

?>
<section id="datos">
<center>
<table> 
   <thead>
      <tr>
         <td><B>RAZÓN SOCIAL</b></td>
         <td><B>FORMA DE PAGO</b></td>
         <td><B>VALOR</b></td>
      </tr>
   </thead>
   <tbody>
      <?php
         while ($row = mysql_fetch_assoc($rs))
         {
            $name = $row["nombre"];
            $tipo = $row["tipo"];
            $valor = htmlentities($row["valor"]);
         ?>
         <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $tipo; ?></td>
            <td><?php echo $valor; ?></td>
         </tr>
         <?php
         }
      ?>
   </tbody>
   <tfoot>
      <tr>
         <td colspan="2">
      <?php
         $totalPag = ceil($total/$limit);
         $links = array();
         for( $i=1; $i<=$totalPag ; $i++)
         {
            $links[] = "<a href=\"?pag=$i\">$i</a>"; 
         }
         echo implode(" - ", $links);
      ?>
         </td>
      </tr>
   </tfoot>
</table>
</center>
</section>
<section id="navidad">
</section>
-->
<nav>
     <marquee>Design: Karla Campoverde y Elizabeth Gómez <----> Programming: Kelo González Quinde</marquee>
     
   </nav>
<script type="text/javascript">

 
  //Configure below to change URL path to the snow image
  var snowsrc="snow.gif"
  // Configure below to change number of snow to render
  var no = 10;
  // Configure whether snow should disappear after x seconds (0=never):
  var hidesnowtime = 0;
  // Configure how much snow should drop down before fading ("windowheight" or "pageheight")
  var snowdistance = "pageheight";

///////////Stop Config//////////////////////////////////

  var ie4up = (document.all) ? 1 : 0;
  var ns6up = (document.getElementById&&!document.all) ? 1 : 0;

   function iecompattest(){
   return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
   }

  var dx, xp, yp;    // coordinate and position variables
  var am, stx, sty;  // amplitude and step variables
  var i, doc_width = 800, doc_height = 600; 
  
  if (ns6up) {
    doc_width = self.innerWidth;
    doc_height = self.innerHeight;
  } else if (ie4up) {
    doc_width = iecompattest().clientWidth;
    doc_height = iecompattest().clientHeight;
  }

  dx = new Array();
  xp = new Array();
  yp = new Array();
  am = new Array();
  stx = new Array();
  sty = new Array();
  snowsrc=(snowsrc.indexOf("192.168.0.142/radioton/prueba.php")!=-1)? "snow.gif" : snowsrc
  for (i = 0; i < no; ++ i) {  
    dx[i] = 0;                        // set coordinate variables
    xp[i] = Math.random()*(doc_width-50);  // set position variables
    yp[i] = Math.random()*doc_height;
    am[i] = Math.random()*20;         // set amplitude variables
    stx[i] = 0.02 + Math.random()/10; // set step variables
    sty[i] = 0.7 + Math.random();     // set step variables
      if (ie4up||ns6up) {
      if (i == 0) {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><a href=\"http://192.168.0.142/radioton/prueba.php\"><img src='"+snowsrc+"' border=\"0\"><\/a><\/div>");
      } else {
        document.write("<div id=\"dot"+ i +"\" style=\"POSITION: absolute; Z-INDEX: "+ i +"; VISIBILITY: visible; TOP: 15px; LEFT: 15px;\"><img src='"+snowsrc+"' border=\"0\"><\/div>");
      }
    }
  }

  function snowIE_NS6() {  // IE and NS6 main animation function
    doc_width = ns6up?window.innerWidth-10 : iecompattest().clientWidth-10;
      doc_height=(window.innerHeight && snowdistance=="windowheight")? window.innerHeight : (ie4up && snowdistance=="windowheight")?  iecompattest().clientHeight : (ie4up && !window.opera && snowdistance=="pageheight")? iecompattest().scrollHeight : iecompattest().offsetHeight;
    for (i = 0; i < no; ++ i) {  // iterate for every dot
      yp[i] += sty[i];
      if (yp[i] > doc_height-50) {
        xp[i] = Math.random()*(doc_width-am[i]-30);
        yp[i] = 0;
        stx[i] = 0.02 + Math.random()/10;
        sty[i] = 0.7 + Math.random();
      }
      dx[i] += stx[i];
      document.getElementById("dot"+i).style.top=yp[i]+"px";
      document.getElementById("dot"+i).style.left=xp[i] + am[i]*Math.sin(dx[i])+"px";  
    }
    snowtimer=setTimeout("snowIE_NS6()", 10);
  }

   function hidesnow(){
      if (window.snowtimer) clearTimeout(snowtimer)
      for (i=0; i<no; i++) document.getElementById("dot"+i).style.visibility="hidden"
   }
      

if (ie4up||ns6up){
    snowIE_NS6();
      if (hidesnowtime>0)
      setTimeout("hidesnow()", hidesnowtime*1000)
      }

</script>
</body> 
</html> 