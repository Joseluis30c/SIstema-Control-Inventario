<?php require_once("../Templates/header.php");?>
<?php require_once("../Conexion/conexion.php");?>

  <!--Total # de clientes-->
  <?php $clientes="Select * from cliente"; $resultcli=mysqli_query($con,$clientes); $numcli=mysqli_num_rows($resultcli);?>
  
  <!--Total # de Usuarios-->
  <?php $usuarios="Select * from usuario"; $resultusu=mysqli_query($con,$usuarios); $numusu=mysqli_num_rows($resultusu);?>

  <!--Total # de Productos-->
  <?php $productos="Select * from producto"; $resultpro=mysqli_query($con,$productos); $numpro=mysqli_num_rows($resultpro);?>
    
  <!--Total # de Ventas-->
  <?php $ventas="Select * from venta"; $resultven=mysqli_query($con,$ventas); $numven=mysqli_num_rows($resultven);?>

  <!--Total # de Compras-->
  <?php $compras="Select * from compra"; $resultcom=mysqli_query($con,$compras); $numcom=mysqli_num_rows($resultcom);?>

  <!--Total # de Categorias-->
  <?php $categoria="Select * from categoria"; $resultcat=mysqli_query($con,$categoria); $numcat=mysqli_num_rows($resultcat);?>

  <div class="container-fluid py-4">
    <div class="row">
      <h3 class="text-center">BIENVENIDO <?php echo $_SESSION['nomb']?> <?php echo $_SESSION['ape']?></h3>
      <p class="text-center">¿Cómo estamos hoy? Espero que...</p>
      <p class="text-center">En modo ¡Bichotas!</p>
    </div>
  </div><hr>
  <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        
          <div class="card">
            
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">group</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Todos los Clientes</p>
                <h4 class="mb-0"><?php echo $numcli?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div style="background: #0f403f ;" class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">checkroom</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Todos los productos</p>
                <h4 class="mb-0"><?php echo $numpro?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div style="background: #a11826 ;" class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">shopping_bag</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Ventas Realizadas</p>
                <h4 class="mb-0"><?php echo $numven;?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-header p-3 pt-2">
              <div style="background: #0f403f;" class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">engineering</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Todos los Usuarios</p>
                <h4 class="mb-0"><?php echo $numusu;?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
      </div>
  </div>
  <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        
          <div class="card">
            
            <div class="card-header p-3 pt-2">
              <div  style="background: #a11826 ;" class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">settings_accessibility</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Todas las categorías</p>
                <h4 class="mb-0"><?php echo $numcat?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">add_shopping_cart</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">Todas las compras</p>
                <h4 class="mb-0"><?php echo $numcom?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
            </div>
          </div>
        </div>
      </div>
  </div>
    
<?php require_once("../Templates/footer.php");?>