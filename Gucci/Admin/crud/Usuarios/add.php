<?php
		include("../../../Conexion/conexion.php");
		if (isset($_POST)) { 
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$dni = $_POST['dni'];
			$telefono = $_POST['telefono'];
			$correo = $_POST['correo'];
            $contraseña = $_POST['contraseña'];

			$query = "INSERT INTO usuario VALUES(null,'$nombre','$apellido','$dni','$telefono','$correo','$contraseña')";
			$resp=mysqli_query($con,$query);
			echo 'OK';
		}
?>