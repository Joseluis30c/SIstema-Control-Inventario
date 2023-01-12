<?php
		include("../../../Conexion/conexion.php");
		if (isset($_POST)) {    
			$revisar = getimagesize($_FILES["imagen"]["tmp_name"]);
			if($revisar !== false){
			$image = $_FILES['imagen']['tmp_name'];
			$imagen = addslashes(file_get_contents($image));

			$producto = $_POST['producto'];
			$precio = $_POST['precio'];
			$descripcion = $_POST['descripcion'];
			$stock = $_POST['stock'];
			$categoria = $_POST['categoria'];
		
			$sql = "INSERT INTO producto VALUES (null,'$producto','$descripcion','$precio','$stock','$imagen','$categoria')";
			$resp=mysqli_query($con,$sql);
			echo 'OK';
		}
		}
        
?>