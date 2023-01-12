<?php
		include("../../../Conexion/conexion.php");
		if (isset($_POST)) { 
        $id = $_POST['id'];
		$cliente = $_POST['nombrec'];
		$apellido = $_POST['apellidoc'];
		$dni = $_POST['dnic'];
		$telefono = $_POST['telefonoc'];
		$direccion = $_POST['direccionc'];
		$correo = $_POST['correoc'];

		$query = "UPDATE cliente SET nombre='$cliente', apellido='$apellido', dni='$dni', telefono='$telefono', direccion='$direccion', correo='$correo' WHERE id_cliente = $id";
		$resp=mysqli_query($con,$query);
		echo 'OK';
	}
?>