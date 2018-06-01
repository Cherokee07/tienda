<?php
session_start();
if(isset($_SESSION["usuario"])){
      echo "Bienvenido ".$_SESSION["usuario"]." eres un ".$_SESSION["rol"];

?>
<html>
    <head>     
<nav>
                <P ALIGN="right"> <a href="admin.php"><img src="imagen/inicio.png" width="80" height="30"><a href="index.php"><img src="imagen/salir1.png" width="80" height="30"></a> </p>
        </nav>
        <center>
<FONT  FACE="arial" SIZE=6 COLOR=blue> BIENVENIDO CAJERO </FONT>
 
        </head>
        <body background="imagen/zapato.jpg" width="400" height="100">
            <form method="POST">
             <table style="margin: 0 auto" border="1" >
                   <th colspan="5"> 
                        <center>
            
        
           <IMG src="imagen/logotipo.png" width="400" height="120">
        
         </center>
               
              
 
 <title>Menu Desplegable</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:430px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
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
		 		
                           
                                
				<li><a href="">Ventas</a>
					<ul>
                                            <li><a href="agregarVenta.php">Realizar Venta</a></li>
                                                <li><a href="agregarusuario.php">Modificar Venta</a></li>
						
					</ul>
				</li>
                                <li><a href="">Apartados</a>
					<ul>
						<li><a href="">modificar</a></li>
						<li><a href="">agregar</a></li>
						
					</ul>
				</li>
                                 
				<li><a href="">Productos</a>
					<ul>
                                            <li><a href="eliminarProducto.php">eliminar</a></li>
                                            <li><a href="modificarEmpleado.php">modificar</a></li>
                                                
					</ul>
				</li>
                                <li><a href="index.php"> Salir  </a></li>			 
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
     



