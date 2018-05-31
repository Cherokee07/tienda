<?php
session_start();
if(isset($_SESSION["usuario"])){
      echo "Bienvenido ".$_SESSION["usuario"]." eres un ".$_SESSION["rol"];
}
?>
<html>
    <head>
     
    </head>
     <center>
<FONT  FACE="arial" SIZE=6 COLOR=black> BIENVENIDO ADMINISTRADOR </FONT>
<body>

        <form method="POST">
            <table align="center">
                <tr>
                    
                    
          <STYLE> 
BODY { background: url(imagen/admin2.jpg) center fixed no-repeat} 
</STYLE>
                    

                    
              
       
       <center>
            
        
           <IMG src="imagen/logotipo.png" width="400" height="120">
        
         </center>
               
 
 
 <title>Menu Desplegable</title>
		<style type="text/css">
			
			* {
				margin:1px;
				padding:px;
			}
			
			#header {
				margin:auto;
				width:380px;
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
				padding:10px 10px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:80px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>
 
 
 
 
<div id="header">
			<ul class="nav">
                            <li><a href="">Usuario</a>
					<ul>
						<li><a href="eliminar.php">eliminar</a></li>
                                                <li><a href="gerente.php">usuarioG</a></li>
                                                <li><a href="agregarusuario.php">agregar</a></li>	
					</ul>
				</li>
				<li><a href="">Productos</a>
					<ul>
                                            <li><a href="eliminarProducto.php">eliminar</a></li>
                                                <li><a href="modificarEmpleado.php">modificar</a></li>
                                                <li><a href="agregarproducto.php">agregar</a></li>
                                                <li><a href="existencia.php">consultar</a></li>	
					</ul>
				</li>
                                <li><a href="">Acceso User</a>
					<ul>
                                            <li><a href="gerente.php">gerente</a></li>
                                            <li><a href="cajero.php">cajero</a></li>
                                            <li><a href="almacen.php">almacen</a></li>
                                                <li><a href="vendedor.php">vendedor</a></li>
					</ul>
				</li>
                                 <li><a href="comentario2.php">Comentario</a>
				</li>
                                 <li><a href="imagen.php">Agregar Imagen</a>
				</li>
                                 
                                
                              
		</div>
	</body>
</html>
                    
                    
