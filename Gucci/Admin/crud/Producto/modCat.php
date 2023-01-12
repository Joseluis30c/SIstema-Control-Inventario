<?php
		include("../../../Conexion/conexion.php");
		if (isset($_POST)) { 
        $id = $_POST['id'];
		$categoria = $_POST['nomcat'];

		$query = "UPDATE categoria SET nombre_categoria='$categoria' WHERE id_categoria = $id";
		$resp=mysqli_query($con,$query);
		echo 'OK';
	}
?>