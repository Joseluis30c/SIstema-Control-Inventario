<?php
		include("../../../Conexion/conexion.php");
		if (isset($_POST)) { 
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$dni = $_POST['dni'];
			$telefono = $_POST['telefono'];
			$direccion = $_POST['direccion'];
			$correo = $_POST['correo'];
	
			$query = "INSERT INTO cliente VALUES(null,'$nombre','$apellido','$dni','$telefono','$direccion','$correo')";
			$resp=mysqli_query($con,$query);
			echo 'OK';
		}
?>