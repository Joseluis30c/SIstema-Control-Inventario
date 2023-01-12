<?php
require_once("../../../Conexion/conexion.php");

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM cliente where id_cliente=$id";
    $resp=mysqli_query($con,$sql);

?>