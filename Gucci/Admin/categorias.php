<?php require_once("../Templates/header.php");?>

<div class="container-fluid py-4">
    <!-- FORMULARIO DE REGISTRO-->
        <div id="cat" style="display:none;" class="card">
        <form id="addcat" method="POST">
                <div class="container">
                    <br>
                    <div class="row align-items-start">
                        <div class="col">
                          <label>Categoría:</label><br>
                          <input id="categoria"name="categoria" style="background: #f0faf5;" type="text" class="form-control" placeholder="Nombre categoría" required>
                        </div>
                        <div class="col" style="text-align:center">
                          <label></label><br>
                          <button type="submit" style="background: #204030" class="btn btn-success" >Guardar</button>
                        </div>
                    </div>
                </div>

                <div class="card-footer p-3">
                </div>
          </form>
        </div><br>
        <!-- FORMULARIO DE MODIFICAR-->
        <div id="cate" style="display:none;" class="card">
        <form id="modcat" method="POST">
                <div class="container">
                    <br>
                    <div class="row align-items-start">
                        <div class="col">
                          <label>ID:</label><br>
                          <input id="id"name="id" style="background: #f0faf5;" type="text" class="form-control" value="" readonly>
                        </div>
                        <div class="col">
                          <label>Categoría:</label><br>
                          <input id="nomcat"name="nomcat" style="background: #f0faf5;" type="text" value=""  class="form-control" required>
                        </div>
                        <div class="col" style="text-align:center">
                          <label></label><br>
                          <button type="submit" style="background: #204030" class="btn btn-success" >Actualizar</button>
                        </div>
                    </div>
                </div>

                <div class="card-footer p-3">
                </div>
          </form>
        </div><br>
 <!--<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Clientes</li>
    </ol><br>-->
    <div class="row">
        <div class="col-12">
          <div id="lista_categoria" class="card my-4">
            <!--MUESTRA LA TABLA LISTA DE CATEGEORIAS-->
          </div>
        </div>
      </div>
    </div>
<?php require_once("../Templates/footer.php"); ?>