<?php
require_once("../../../Conexion/conexion.php");

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM usuario where id_usuario=$id";
    $resp=mysqli_query($con,$sql);

?>