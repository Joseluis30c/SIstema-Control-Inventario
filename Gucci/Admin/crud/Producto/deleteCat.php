<?php
require_once("../../../Conexion/conexion.php");

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM categoria where id_categoria=$id";
    $resp=mysqli_query($con,$sql);

?>