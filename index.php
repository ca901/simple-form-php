<?php 


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>

 	<form id="form" action="guardado.php" method="post" name="formulario">

 		<p><input type="text" name="nombre" placeholder="Nombre"></p>

 		<p><input type="email" name="email" placeholder="Email"></p>

 		<p><select name="pais" id="pais">
 			<option value="costarica">Costa Rica</option>
 			<option>Panama</option>
 			<option>Colombia</option>
 		</select></p>

 		<p><input type="password" name="password" placeholder="Password"><p>

 		<p><input type="submit" name="enviar" id="enviar" value="Enviar"></p>
 	</form>

 </body>
 </html>