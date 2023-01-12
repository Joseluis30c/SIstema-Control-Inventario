<?php require_once("../Templates/header.php"); require_once("../Conexion/conexion.php");?>
 <!--LISTA CLIENTE -->
 <?php $query = "SELECT * FROM cliente ORDER BY id_cliente"; $resultado=mysqli_query($con,$query);?>
<!--LISTA PRODUCTOS -->
 <?php $query = "SELECT id_producto, nombre, precio,stock,imagen FROM producto where stock > 0"; $result=mysqli_query($con,$query);?>
<!-- CARRITO DE COMPRAS-->
<?php
if(isset($_POST["add_to_cart"]))
{
if(isset($_SESSION["shopping_cart"]))
{
$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["shopping_cart"]);
$item_array = array(
'item_id' => $_GET["id"],
'item_name' => $_POST["hidden_name"],
'item_price' => $_POST["hidden_price"],
'item_quantity' => $_POST["quantity"],
'item_talla' => $_POST["talla"]
);
$_SESSION["shopping_cart"][$count] = $item_array;
}
else
{
echo '<script>alert("El producto ya se encuentra agregado")</script>';
 
}
}
else
{
$item_array = array(
'item_id' => $_GET["id"],
'item_name' => $_POST["hidden_name"],
'item_price' => $_POST["hidden_price"],
'item_quantity' => $_POST["quantity"],
'item_talla' => $_POST["talla"]
);
$_SESSION["shopping_cart"][0] = $item_array;
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "vaciar")
{
foreach($_SESSION["shopping_cart"] as $keys => $values)
{
if($values["item_id"])
{
unset($_SESSION["shopping_cart"][$keys]);
echo '<script>alert("VENTA GENERADA EXITOSAMENTE")</script>';
echo '<script>window.location="carrito.php"</script>';

}
}
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["shopping_cart"] as $keys => $values)
{
if($values["item_id"] == $_GET["id"])
{
unset($_SESSION["shopping_cart"][$keys]);
echo '<script>window.location="carrito.php"</script>';
}
}
}
}


?>

 <div class="container-fluid py-4">
<!--FORMULARIO DE REGISTRO-->
<div class="card">
<br>
    <div class="container">
        <h3 class="text-center">Productos</h3><br>
        <?php
        if(mysqli_num_rows($result) > 0)
        {
        while($row = mysqli_fetch_array($result))
        {
        ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?action=add&id=<?php echo $row["id_producto"]; ?>">
            <div class="row align-items-start">
                <div class="col-4">
                    <label class="text-dark"><?php echo $row["nombre"]; ?></label>
                </div>
                <div class="col">
                    <?php echo '<img width="80" heigth="80" src="data:image/jpeg;base64,'.base64_encode($row['imagen']).'"/>'?><br>
                    <label class="text-danger">S/.<?php echo $row["precio"]; ?></label>
                </div>
                <div class="col" style="text-align:center">
                    <label>Cantidad:</label>
                    <input style="background: #f0faf5;" type="number" name="quantity" min="1" max="<?php echo $row["stock"]; ?>" class="form-control text-center" value="1" />
                </div>
                <div class="col" style="text-align:center"><br>
                <select id="talla"name="talla" class="form-control text-center" style="background: #f0faf5;"required>
                            <option value="0">Talla</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                </select>
                </div>
                <div class="col-2" style="text-align:center"><br>
                    <button type="submit" name="add_to_cart" class="btn btn-success"><i class="material-icons opacity-10">shopping_cart</i></button>
                    <input type="hidden" name="hidden_name" value="<?php echo $row["nombre"]; ?>" />
                    <input type="hidden" name="hidden_price" value="<?php echo $row["precio"]; ?>" />
                </div>
            </div>
            </form>
                <?php
                    }
                    }
                ?>
            <hr>
            <br>
            <h3 class="text-center">Detalle Carrito</h3><br>
            <form action="crud/Ventas/add.php" method="POST">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                    <tr>
                    <th width="20%">Producto</th>
                    <th width="10%" class='text-center'>Cantidad</th>
                    <th width="10%" class='text-center'>Precio</th>
                    <th width="10%" class='text-center'>Talla</th>
                    <th width="15%" class='text-center'>Total</th>
                    <th width="5%"></th>
                    </tr>
                    <?php
                    if(!empty($_SESSION["shopping_cart"]))
                    {
                    $total = 0;
                    foreach($_SESSION["shopping_cart"] as $keys => $values)
                    {
                    ?>
                    <tr  class="table_row">
                    <td><?php echo $values["item_name"]; ?></td>
                    <td class='text-center'><?php echo $values["item_quantity"]; ?></td>
                    <td class='text-center'>S/. <?php echo $values["item_price"]; ?></td>
                    <td class='text-center'><?php echo $values["item_talla"]; ?></td>
                    <td class='text-center'>S/. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                    <td><a href="carrito.php?action=delete&id=<?php echo $values["item_id"]; ?>"><i class="material-icons opacity-10">delete</i></a></td>
                    </tr>
                    <?php
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                    $total2=$total;
                    }
                    ?>
                    <tr class="table_row">
                        <td></td><td></td><td></td><td></td>
                        <input type="hidden" id="totalp" name="totalp" value="<?php echo $total2; ?>">
                        <td  class="text-center"><b>Total: <label>S/. <?php echo $total2; ?></label></b></td>
                    </tr>
                    <?php
                    }else{
                        echo "<tr class='table_row'><td class='text-center' colspan='6'>Carrito Vacío</td></tr>";
                    }
                    ?></table>
                    <hr><br>
                    
                </div>
                <div class="row align-items-start">
                    <div class="col-3">
                    <label>Cliente:</label>
                    <select id="cliente"name="cliente" class="form-control text-center" style="background: #f0faf5;"required>
                        <option value="0">Seleccionar Cliente</option>
                        <?php while($row = $resultado->fetch_assoc()) { ?>
                        <option value="<?php echo $row['id_cliente']; ?>"><?php echo $row['nombre']; ?> <?php echo $row['apellido']; ?></option>
                        <?php } ?>
                    </select>
                    </div>
                    <div class="col-4">
                        <br>
                        <button type="submit" style="background: #204030" class="btn btn-success" >Generar Venta</button>
                    </div>
                    
                </div>       
            </form>
            <div class="card-footer p-3">
            </div>
        
    </div>
</div><br>

<?php require_once("../Templates/footer.php"); ?>