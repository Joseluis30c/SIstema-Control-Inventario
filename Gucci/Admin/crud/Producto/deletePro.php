<?php
require_once("../../../Conexion/conexion.php");

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM producto where id_producto=$id";
    $resp=mysqli_query($con,$sql);

?>