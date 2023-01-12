<?php require_once("../Templates/header.php"); ?>

<div class="container-fluid py-4">
<!--FORMULARIO DE REGISTRO-->
<div id="cli"style="display:none;" class="card">
    <div class="container">
        <form id="addcli" method="post">
                    <br>
                    <div class="row align-items-start">
                        <div class="col">
                        <label>Nombre:</label><br>
                        <input id="nombre" name="nombre" style="background: #f0faf5;" type="text" class="form-control" placeholder="Ingrese Nombre" required>
                        </div>
                        <div class="col">
                        <label>Apellido:</label>
                        <input id="apellido" name="apellido" type="text" style="background: #f0faf5;" placeholder="Ingrese Apellido" class="form-control" required>
                        </div>
                        <div class="col">
                        <label>DNI:</label>
                        <input id="dni" name="dni" type="text" style="background: #f0faf5;" placeholder="Ingrese Dni" class="form-control" required>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                        <label>Teléfono:</label>
                        <input id="telefono" name="telefono" style="background: #f0faf5;" type="text" placeholder="Ingrese Teléfono" class="form-control" required>
                        </div>
                        <div class="col">
                        <label>Dirección:</label>
                        <input id="direccion" name="direccion" style="background: #f0faf5;" type="text" placeholder="Direccion de Envio" class="form-control" required>
                        </div>
                        <div class="col">
                        <label>Correo:</label>
                        <input id="correo" name="correo" style="background: #f0faf5;" type="email" placeholder="Ingrese Correo" class="form-control" required>
                        
                        </div>
                    </div>
                    <div class="row align-items-end">
                        <div class="col">
                        </div>
                        <div class="col" style="text-align: center">
                        <label></label><br>
                        <button type="submit" style="background: #204030" class="btn btn-success" >Guardar</button>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                </form>
                <div class="card-footer p-3">
                </div>
    </div><br>

<!--FORMULARIO DE MODIFICAR-->
<div id="ecli"style="display:none;" class="card">
    <div class="container">
        <form id="modcli" method="POST">
                    <br>
                    <div class="row align-items-start">
                        <div class="col">
                        <label>Nombre:</label><br>
                        <input id="nombrec" name="nombrec" style="background: #f0faf5;" type="text" class="form-control" required>
                        </div>
                        <div class="col">
                        <label>Apellido:</label>
                        <input id="apellidoc" name="apellidoc" type="text" style="background: #f0faf5;" class="form-control" required>
                        </div>
                        <div class="col">
                        <label>DNI:</label>
                        <input id="dnic" name="dnic" type="text" style="background: #f0faf5;" class="form-control" required>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                        <label>Teléfono:</label>
                        <input id="telefonoc" name="telefonoc" style="background: #f0faf5;" type="text" class="form-control" required>
                        </div>
                        <div class="col">
                        <label>Dirección:</label>
                        <input id="direccionc" name="direccionc" style="background: #f0faf5;" type="text" class="form-control" required>
                        </div>
                        <div class="col">
                        <label>Correo:</label>
                        <input id="correoc" name="correoc" style="background: #f0faf5;" type="email" class="form-control" required>
                        
                        </div>
                    </div>
                    <div class="row align-items-end">
                        <div class="col">
                        </div>
                        <div class="col" style="text-align: center">
                        <label></label><br>
                        <input type="hidden" id="id" name="id">
                        <button type="submit" style="background: #204030" class="btn btn-success" >Actualizar</button>
                        </div>
                        <div class="col">
                        </div>
                    </div>
                </div>
                </form>
                <div class="card-footer p-3">
                </div>
    </div><br>
 <!--<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Clientes</li>
    </ol><br>-->
    <div class="row">
        <div class="col-12">
          <div id="records_content" class="card my-4">
            <!--MUESTRA LA TABLA LISTA DE CLIENTES-->
          </div>
        </div>
      </div>
    </div>

<?php require_once("../Templates/footer.php"); ?>