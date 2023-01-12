<?php require_once("../Templates/header.php"); require_once("../Conexion/conexion.php");?>

 <!--LISTA CATEGORIA -->
 <?php $query = "SELECT * FROM categoria ORDER BY nombre_categoria"; $resultado=mysqli_query($con,$query);$resultado2=mysqli_query($con,$query);?>
 <div class="container-fluid py-4">
        <!-- FORMULARIO DE REGISTRO-->
        <div id="agregar"style="display:none;" class="card">
        <form method="POST" id="agregarprodu" enctype="multipart/form-data">
                <div class="container">
                    <br>
                    <div class="row align-items-start">
                        <div class="col">
                        <label>Producto:</label><br>
                        <input id="producto" name="producto" style="background: #f0faf5;" type="text" class="form-control" placeholder="Nombre producto" required>
                        </div>
                        <div class="col">
                        <label>Imagen:</label>
                        <input style="background: #f0faf5;" name="imagen" class="form-control" id="uploadImage1" type="file" onchange="previewImage(1);" required accept="image/*">
                        </div>
                        <div class="col" style="text-align:center">
                        <div><img id="uploadPreview1" width="80" height="80" src="https://ru.seaicons.com/wp-content/uploads/2015/06/Preview-icon1.png"></div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                        <label>Precio:</label>
                        <input id="precio"name="precio" style="background: #f0faf5;" type="text" placeholder="Precio producto" class="form-control text-center" required>
                        </div>
                        <div class="col">
                        <label>Descripción:</label>
                        <input id="descripcion"name="descripcion" style="background: #f0faf5;" type="text" placeholder="Detalle del Producto" class="form-control" required>
                        </div>
                        <div class="col" style="text-align:center">
                        <label></label><br>
                        <button type="submit" style="background: #204030" class="btn btn-success" >Guardar</button>
                        </div>
                    </div>
                    <div class="row align-items-end">
                        <div class="col">
                        <label>Stock:</label>
                        <input id="stock"name="stock" style="background: #f0faf5;" type="number" placeholder="Stock producto" class="form-control text-center" required>
                        </div>
                        <div class="col">
                        <label>Categoría:</label>
                        <select id="categoria"name="categoria" class="form-control text-center" style="background: #f0faf5;"required>
                            <option value="0">Seleccionar Categoría</option>
                            <?php while($row = $resultado->fetch_assoc()) { ?>
                            <option value="<?php echo $row['id_categoria']; ?>"><?php echo $row['nombre_categoria']; ?></option>
                            <?php } ?>
                        </select>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>

                <div class="card-footer p-3">
                </div></form>
        </div><br>
        
        <!-- FORMULARIO DE EDITAR-->
        <div id="editar"style="display:none;" class="card">
        <form method="POST" id="modpro">
                <div class="container">
                    <br>
                    <div class="row align-items-start">
                        <div class="col">
                        <label>Producto:</label><br>
                        <input id="nombrep" name="nombrep" style="background: #f0faf5;" type="text" class="form-control" required>
                        </div>
                        <div class="col">
                        <label>Descripción:</label>
                        <input id="descripcionp"name="descripcionp" style="background: #f0faf5;" type="text" class="form-control" required>
                        
                        </div>
                        <div class="col" style="text-align:center">
                        <label>Stock:</label>
                        <input id="stockp"name="stockp" style="background: #f0faf5;" type="number" class="form-control text-center" required>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                        <label>Precio:</label>
                        <input id="preciop"name="preciop" style="background: #f0faf5;" type="text" class="form-control text-center" required>
                        </div>
                        <div class="col">
                        <label>Categoría:</label>
                        <select id="categoriap"name="categoriap" class="form-control text-center" style="background: #f0faf5;"required>
                        <option value="0">Seleccionar Categoría</option>
                            <?php while($row = $resultado2->fetch_assoc()) { ?>
                            <option value="<?php echo $row['id_categoria']; ?>"><?php echo $row['nombre_categoria']; ?></option>
                            <?php } ?>
                            
                        </select>
                        </div>
                        <div class="col" style="text-align:center">
                        <label></label><br>
                        <input type="hidden" id="idp" name="idp">
                        <button type="submit" style="background: #204030" class="btn btn-success" >Actualizar</button>
                        </div>
                    </div>
                </div>

                <div class="card-footer p-3">
                </div></form>
        </div><br>
<div class="row">
        <div class="col-12">
          <div id="lista_producto" class="card my-4">
                <!--MUESTRA LA TABLA LISTA DE PRODUCTOS-->
          </div>
        </div>
</div>
</div>

<?php require_once("../Templates/footer.php"); ?>
