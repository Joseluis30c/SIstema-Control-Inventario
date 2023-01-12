<!-- Modal -->
<?php 
$idd=$fila['id_venta'];
$detalle="SELECT d.id_venta, p.nombre, p.imagen, d.talla, d.cantidad, d.precio from detalleventa d INNER JOIN producto p on d.id_producto=p.id_producto where d.id_venta=$idd"; $r=mysqli_query($con,$detalle);?>
<div class="modal fade" id="exampleModal<?php echo $fila['id_venta']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h4 class="modal-title" id="titleModal">Detalle de Venta</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
              <form class="form-horizontal">
                <div class="container">
                  <?php while($fil=mysqli_fetch_assoc($r)){ ?>
                  <div class="row align-items-start">
                        <div class="col-5">
                          <label>Producto:</label>
                          <p><?php echo $fil['nombre']; ?></p>
                        </div>
                        <div class="col">
                          <label>Imagen:</label>
                          <?php echo'<img width="80" heigth="80" src="data:image/jpeg;base64,'.base64_encode($fil['imagen']).'"/>'?>
                          <label style="color: red">S/. <?php echo $fil['precio']; ?></label>
                        </div>
                        <div class="col">
                          <label>Talla:</label>
                          <p><?php echo $fil['talla']; ?></p>
                        </div>
                        <div class="col">
                          <label>Cantidad:</label>
                          <p><?php echo $fil['cantidad']; ?></p>
                        </div>
                    </div><hr><?php } ?>
                    <div class="row align-items-start">
                      <div class="col">
                          <label>Total:</label>
                          <label><b>S/. <?php echo $fila['total']; ?></b></label>
                        </div>
                    </div><hr>
                </div>
              <div class="tile-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </form>
      </div>
    </div>
  </div>
</div>