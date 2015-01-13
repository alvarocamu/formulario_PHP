		<?php include ("includes/header.php") ?>
		<div class="container">
	<?php
	//recojo las variables del formulario
		$nombre=$_POST['nombre']; 
		$email=$_POST['email']; 
		$poblacion=$_POST['poblacion']; 	
		//los pasamos como parametros en la funcion
		include("includes/functions.php");
		
		echo "<p>".sobreMi($nombre,$email,$poblacion)."</p>";
	?>
	</div>
	<?php include ("includes/footer.php") ?>
