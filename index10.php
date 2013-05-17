<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Sitio Oficial de Kelo González</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Sitio Oficial de Kelo González" />
        <meta name="keywords" content="kelo, gonzalez, diseño, fotografia, web" />
        <meta name="author" content="Kelo" />
        <link rel="shortcut icon" href="/favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style10.css" />
        <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
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

<!--PopUp-->
<script type="text/javascript" src="jquery.js"></script>
<style type="text/css">

#dialog-overlay {

    /* set it to fill the whil screen */
    width:100%; 
    height:100%;
    
    /* transparency for different browsers */
    filter:alpha(opacity=50); 
    -moz-opacity:0.5; 
    -khtml-opacity: 0.5; 
    opacity: 0.5; 
    background:#000; 

    /* make sure it appear behind the dialog box but above everything else */
    position:absolute; 
    top:0; left:0; 
    z-index:3000; 

    /* hide it by default */
    display:none;
}


#dialog-box {
    
    /* css3 drop shadow */
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
    
    /* css3 border radius */
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    
    background:#eee;
    /* styling of the dialog box, i have a fixed dimension for this demo */ 
    width:328px; 
    
    /* make sure it has the highest z-index */
    position:absolute; 
    z-index:5000; 

    /* hide it by default */
    display:none;
}

#dialog-box .dialog-content {
    /* style the content */
    text-align:left; 
    padding:10px; 
    margin:13px;
    color:#666; 
    font-family:arial;
    font-size:11px; 
}

a.button {
    /* styles for button */
    margin:10px auto 0 auto;
    text-align:center;
    background-color: #e33100;
    display: block;
    width:50px;
    padding: 5px 10px 6px;
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    line-height: 1;
    
    /* css3 implementation :) */
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
    border-bottom: 1px solid rgba(0,0,0,0.25);
    position: relative;
    cursor: pointer;
    
}

a.button:hover {
    background-color: #c33100;  
}

/* extra styling */
#dialog-box .dialog-content p {
    font-weight:700; margin:0;
}

#dialog-box .dialog-content ul {
    margin:10px 0 10px 20px; 
    padding:0; 
    height:50px;
}
</style>
<script type="text/javascript">

$(document).ready(function () {

    // if user clicked on button, the overlay layer or the dialogbox, close the dialog  
    $('a.btn-ok, #dialog-overlay, #dialog-box').click(function () {     
        $('#dialog-overlay, #dialog-box').hide();       
        return false;
    });
    
    // if user resize the window, call the same function again
    // to make sure the overlay fills the screen and dialogbox aligned to center    
    $(window).resize(function () {
        
        //only do it if the dialog box is not hidden
        if (!$('#dialog-box').is(':hidden')) popup();       
    }); 
    
    
});

//Popup dialog
function popup(message) {
        
    // get the screen height and width  
    var maskHeight = $(document).height();  
    var maskWidth = $(window).width();
    
    // calculate the values for center alignment
    var dialogTop =  (maskHeight/3) - ($('#dialog-box').height());  
    var dialogLeft = (maskWidth/2) - ($('#dialog-box').width()/2); 
    
    // assign values to the overlay and dialog box
    $('#dialog-overlay').css({height:maskHeight, width:maskWidth}).show();
    $('#dialog-box').css({top:dialogTop, left:dialogLeft}).show();
    
    // display the message
    $('#dialog-message').html(message);
            
}

</script>
</head>
   <body>
<div id="dialog-overlay"></div>
<div id="dialog-box">
    <div class="dialog-content">
        <div id="dialog-message"></div>
        <a href="#" class="button">Cerrar</a>
    </div>
</div>

<!--Sitio-->
        <div class="container">
            <div class="header">
                </span>
                <div class="clr"></div>
            </div>
            <h1>Software de Donaciones de la RadioTON<span>GAD Municipal de cantón Naranjal</span></h1>

<FORM ACTION="procesar.php"> 
<section id="Registro">

<TR> 
   <TD><b>Nombre:</TD> 
   <TD><INPUT TYPE="text" NAME="nombre" SIZE="55" MAXLENGTH="100"></TD> 
</TR> 
<TR> 
   <select name="tipo">
<option>Efectivo</option>
<option>Trasferencia</option>
<option>Cheque</option>
</select>
</TR> 
<TR> 
   <TD><b>Valor:</TD> 
   <TD><INPUT TYPE="int" NAME="valor" SIZE="20" MAXLENGTH="30"></TD> 
</TR> 

</section>

<section id="boton"><INPUT TYPE="submit" NAME="accion" VALUE="Grabar"> </section>

</FORM> 
<ul id="diapos">
        <li><img src="http://cssdeck.com/uploads/media/items/3/3yiC6Yq.jpg" alt="" width="700" height="350" /></li>
        <li><img src="http://cssdeck.com/uploads/media/items/4/40Ly3VB.jpg" alt="" width="700" height="350" /></li>
        <li><img src="http://cssdeck.com/uploads/media/items/0/00kih8g.jpg" alt="" width="700" height="350" /></li>
        <li><img src="http://cssdeck.com/uploads/media/items/2/2rT2vdx.jpg" alt="" width="700" height="350" /></li>
    </ul>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
   </body>
</html>
