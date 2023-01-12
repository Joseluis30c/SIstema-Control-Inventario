<?php require_once("../Templates/header.php"); require_once("../Conexion/conexion.php"); ?>

<?php $pedido="SELECT p.total, p.id_venta, c.nombre, p.fecha_compra, c.apellido, u.nombre, u.apellido FROM venta p INNER JOIN cliente c on p.id_cliente=c.id_cliente INNER JOIN usuario u on p.id_usuario=u.id_usuario order by p.id_venta"; $resultado=mysqli_query($con,$pedido); ?>

 <div class="container-fluid py-4"><br><br>
  <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div  class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div style="background-color: #a11826;" class="bg-gradient border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Tabla Ventas</h6>
              </div>
            </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <div style="float: right;">
                <input type="text" class="form-control" placeholder="Buscar...">
              </div>
              <table class="table align-items-center mb-0">
                <thead>
                  <tr class="align-middle text-center">
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fecha Compra</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cliente</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Vendedor</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <?php
                if(mysqli_num_rows($resultado) > 0){
                  while($fila=mysqli_fetch_assoc($resultado)){ ?>
                
                <tr class="align-middle text-center">
                      <td>
                        <p class="text-xs text-secondary mb-0"><?php echo $fila['id_venta']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0"><?php echo $fila['fecha_compra']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0"><?php echo $fila['nombre']; ?> <?php echo $fila['apellido']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0">S/. <?php echo $fila['total']; ?></p>
                      </td>
                      <td>
                        <p class="text-xs text-secondary mb-0"><?php echo $fila['nombre']; ?> <?php echo $fila['apellido']; ?></p>
                      </td>
                      <td class="align-middle">
                        <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $fila['id_venta']; ?>" class="text-secondary font-weight-bold text-xs">
                        Ver Detalle
                      </a>
                      </td>
                </tr>
                    <?php include("crud/Ventas/read.php") ?>
                    <?php } }else{
                      echo '<tr class="align-middle text-center"><td colspan="7"><p class="text-xs text-secondary mb-0">No hay registros!</p></td></tr>';
                    }?>
              </table>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    
<?php require_once("../Templates/footer.php"); ?>