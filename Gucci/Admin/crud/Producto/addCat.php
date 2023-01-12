<?php
		include("../../../Conexion/conexion.php");
		if (isset($_POST)) { 
		$categoria = $_POST['categoria'];

		$sql = "INSERT INTO categoria VALUES (null,'$categoria')";
		$resp=mysqli_query($con,$sql);
		echo 'OK';
	}
?>