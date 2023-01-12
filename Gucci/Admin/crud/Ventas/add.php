
<?php
require_once("../../../Conexion/conexion.php");
session_start();
$id=$_SESSION['id'];
$idcli=$_POST['cliente'];
$total = $_POST['totalp'];
$fecha = date('Y-m-d');
if(!empty($_SESSION["shopping_cart"]))
{
    $pedido=mysqli_query($con, "INSERT INTO venta VALUES (null,'$fecha', '$idcli', '$total','$id')");
	$idd= mysqli_insert_id($con);
    if ($pedido) {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
        $sql=mysqli_query($con, "INSERT INTO detalleventa(id_venta, id_producto,talla, cantidad, precio) VALUES ('$idd','".$values['item_id']."','".$values['item_talla']."', '".$values['item_quantity']."', '".$values['item_price']."')");
       	if($sql){
			   $producto="update producto SET stock = stock - '".$values['item_quantity']."' where id_producto = '".$values['item_id']."'";
			   $result=mysqli_query($con,$producto);
		   }
        }
          
    }  
    
header('location:../../carrito.php?action=vaciar');
}else{
        echo "<script>ERROR AL SOLICITAR PEDIDO</script>";
    }

?>