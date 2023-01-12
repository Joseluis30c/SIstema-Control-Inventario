

<?php require_once("../Templates/header.php"); require_once("../Conexion/conexion.php"); ?>
<?php $productos="SELECT id_producto,nombre FROM producto"; $resultado=mysqli_query($con,$productos);$resultado2=mysqli_query($con,$productos); ?>
<div class="container-fluid py-4">
<!--FORMULARIO DE REGISTRO-->
<div id="compras"style="display:none;" class="card">
    <div class="container">
        <form id="addcompra" method="post">
                    <br>
                    <div class="row align-items-start">
                        <div class="col-5">
                        <label>Producto:</label><br>
                        <select id="producto"name="producto" class="form-control text-center" style="background: #f0faf5;"required>
                            <option value="0">Seleccionar Producto</option>
                            <?php while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['id_producto']; ?>"><?php echo $row['nombre']; ?></option>
                            <?php } ?>
                        </select>
                        </div>
                        <div class="col text-center">
                        <label>Talla:</label>
                        <select id="talla"name="talla" class="form-control text-center" style="background: #f0faf5;"required>
                            <option value="0">Talla</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                        </select>
                        </div>
                        <div class="col text-center">
                        <label>Precio Compra:</label>
                        <input id="precio" name="precio" type="text" style="background: #f0faf5;" placeholder="Precio" class="form-control text-center"onkeyup="sum();"required>
                        </div>
                        <div class="col text-center">
                        <label>Cantidad:</label>
                        <input id="cantidad" name="cantidad" type="text" style="background: #f0faf5;" placeholder="Pedir Cantidad" class="form-control text-center" onkeyup="sum();"required>
                        </div>
                        <div class="col text-center">
                        <label>Total:</label>
                        <input id="total" name="total" type="text" style="background: #f0faf5;" placeholder="Pedir Cantidad" class="form-control text-center" readonly>
                        </div>
                    </div>
                    <div class="row align-items-end">
                        <div class="col">
                        </div>
                        <div class="col" style="text-align: center">
                        <label></label><br>
                        <button type="submit" style="background: #204030" class="btn btn-success" >Comprar</button>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                </form>
                <div class="card-footer p-3">
                </div>
    </div><br>
<!--FORMULARIO DE REGISTRO-->
<div id="vercompra"style="display:none;" class="card">
    <div class="container">
        <form id="vercompras" method="post">
                    <br>
                    <div class="row align-items-start">
                    <div class="col-1">
                        <label>ID:</label><br>
                        <input id="id" name="id" type="text" style="background: #f0faf5;" class="form-control" readonly>
                        </div>
                        <div class="col-5">
                        <label>Producto:</label><br>
                        <input id="productoc" name="productoc" type="text" style="background: #f0faf5;" class="form-control" readonly>
                        </div>
                        <div class="col text-center">
                        <label>Talla:</label>
                        <input id="tallac" name="tallac" type="text" style="background: #f0faf5;" class="form-control text-center" readonly>
                        </div>
                        <div class="col text-center">
                        <label>Precio Compra:</label>
                        <input id="precioc" name="precioc" type="text" style="background: #f0faf5;" class="form-control text-center" readonly>
                        </div>
                        <div class="col text-center">
                        <label>Cantidad:</label>
                        <input id="cantidadc" name="cantidadc" type="text" style="background: #f0faf5;" class="form-control text-center" readonly>
                        </div>
                        <div class="col text-center">
                        <label>Total:</label>
                        <input id="totalc" name="totalc" type="text" style="background: #f0faf5;" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                </form>
                <div class="card-footer p-3">
                </div>
    </div><br>

    <div class="row">
        <div class="col-12">
          <div id="listar_compras" class="card my-4">
            <!--MUESTRA LA TABLA LISTA DE COMPRAS-->
          </div>
        </div>
      </div>
    </div>
<?php  require_once("../Templates/footer.php"); ?>