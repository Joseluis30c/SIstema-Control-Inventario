<?php
		include("../../../Conexion/conexion.php");
		if (isset($_POST)) { 
            //$id=$_POST['id'];

            $producto=$_POST['producto'];
            $precioc= $_POST['precio'];
            $talla=$_POST['talla'];
			$cantidad = $_POST['cantidad'];
			$total = $_POST['total'];

			$query =mysqli_query($con, "INSERT INTO compra VALUES(null,'$producto','$precioc','$talla','$cantidad','$total')");
            if($query){
                $sql = "update producto SET stock = stock + $cantidad where id_producto = $producto";
                $result=mysqli_query($con,$sql);
            }
			echo 'OK';
		}
?>