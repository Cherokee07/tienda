<?php

session_start();
if(isset($_SESSION["usuario"])){
      echo "Bienvenido ".$_SESSION["usuario"]." eres un ".$_SESSION["rol"];
?>

<html>
    <head>     
<P ALIGN="right"> '<a href="index.php">Salir</a></p> 
        <center>
<FONT  FACE="arial" SIZE=6 COLOR=blue> BIENVENIDO ALMACEN </FONT>
 
        </head>
        <body background="imagen/seis.jpg" width="400" height="100">
            <form method="POST">
             <table style="margin: 0 auto" >
                   <th colspan="5"> 
                        <center>
            
        
                <IMG src="imagen/logotipo.jpg" width="400" height="200">
        
         </center> 
              
 
 <title>Menu Desplegable</title>
		<style type="text/css">
			
			* {
				margin:1px;
				padding:1px;
			}
			
			#header {
				margin:auto;
				width:240px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:purple;
				color:#fff;
				text-decoration:none;
				padding:10px 20px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:100px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-100px;
				top:0px;
			}
			
		</style>
 
<div id="header">
			<ul class="nav">
		 		
                           
                                
				<li><a href="">Actualizar Productos</a>
					<ul>
                                            <li><a href="agregarproducto.php">Actualizar Producto</a></li>
                                                <li><a href="agregarusuario.php">Modificar Venta</a></li>
						
					</ul>
				</div>
           
</table>  
            
    </body>
</html>

 <?php
} else {
    header("location: index.php");
}
?>
     




