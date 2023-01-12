<?php
// include Database connection file
include("../../../Conexion/conexion.php");

// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // get User ID
    $id = $_POST['id'];

    // Get User Details
    $query = "SELECT * FROM cliente WHERE id_cliente = $id";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    // display JSON data
    echo json_encode($response);
}