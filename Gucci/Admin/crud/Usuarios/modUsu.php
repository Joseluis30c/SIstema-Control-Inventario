<?php
		include("../../../Conexion/conexion.php");
		if (isset($_POST)) { 
        $id = $_POST['id'];
		$nombreu = $_POST['nombreu'];
        $apellido = $_POST['apellidou'];
        $dni = $_POST['dniu'];
        $telefono = $_POST['telefonou'];
        $correo = $_POST['correou'];
        $contraseña = $_POST['contraseñau'];

		$query = "UPDATE usuario SET nombre='$nombreu', apellido='$apellido', dni='$dni', telefono='$telefono', correo='$correo', contra='$contraseña' WHERE id_usuario = $id";
		$resp=mysqli_query($con,$query);
		echo 'OK';
	}
?>