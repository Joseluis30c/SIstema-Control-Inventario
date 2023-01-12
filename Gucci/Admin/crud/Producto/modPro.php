<?php
		include("../../../Conexion/conexion.php");
		if (isset($_POST)) { 

        $id = $_POST['idp'];
		$nombre = $_POST['nombrep'];
        $precio = $_POST['preciop'];
        $descripcion = $_POST['descripcionp'];
        $stock = $_POST['stockp'];
        $categoria = $_POST['categoriap'];


		$query = "UPDATE producto SET nombre='$nombre', descripcion='$descripcion', precio='$precio',stock='$stock', id_categoria='$categoria' WHERE id_producto = $id";
		$resp=mysqli_query($con,$query);
		echo 'OK';
	}
?>