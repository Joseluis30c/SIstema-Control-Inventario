<?php require_once("../Templates/header.php"); ?>
<div class="container-fluid py-4">
<!--FORMULARIO DE REGISTRO-->
<div id="usu"style="display:none;" class="card">
    <div class="container">
        <form id="addusu" method="post">
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
                            <label>Correo:</label>
                            <input id="correo" name="correo" style="background: #f0faf5;" type="email" placeholder="Direccion de Envio" class="form-control" required>
                        </div>
                        <div class="col">
                            <label>Password:</label>
                            <input id="contraseña" name="contraseña" style="background: #f0faf5;" type="password" placeholder="Ingrese Correo" class="form-control" required>
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
        </form>
            <div class="card-footer p-3">
            </div>
    </div>
</div><br>

<!--FORMULARIO DE MODIFICAR-->
<div id="usus"style="display:none;" class="card">
<form id="modusu" method="POST">
    <div class="container">
        
            <div class="row align-items-start">
                        <div class="col">
                            <label>Nombre:</label><br>
                            <input id="nombreu" name="nombreu" value="" style="background: #f0faf5;" type="text" class="form-control" placeholder="Ingrese Nombre" required>
                        </div>
                        <div class="col">
                            <label>Apellido:</label>
                            <input id="apellidou" name="apellidou" type="text" style="background: #f0faf5;" placeholder="Ingrese Apellido" class="form-control" required>
                        </div>
                        <div class="col">
                            <label>DNI:</label>
                            <input id="dniu" name="dniu" type="text" style="background: #f0faf5;" placeholder="Ingrese Dni" class="form-control" required>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col">
                            <label>Teléfono:</label>
                            <input id="telefonou" name="telefonou" style="background: #f0faf5;" type="text" placeholder="Ingrese Teléfono" class="form-control" required>
                        </div>
                        <div class="col">
                            <label>Correo:</label>
                            <input id="correou" name="correou" style="background: #f0faf5;" type="email" placeholder="Direccion de Envio" class="form-control" required>
                        </div>
                        <div class="col">
                            <label>Password:</label>
                            <input id="contraseñau" name="contraseñau" style="background: #f0faf5;" type="password" placeholder="Ingrese Correo" class="form-control" required>
                        </div>
                    </div>
                    <div class="row align-items-end">
                        <div class="col">
                        </div>
                        <div class="col" style="text-align: center">
                            <label></label><br>
                            <input id="id" name="id" type="hidden" value="">
                            <button type="submit" style="background: #204030" class="btn btn-success" >Actualizar</button>
                        </div>
                        <div class="col">
                        </div>
                    </div>             

            <div class="card-footer p-3">
            </div>
            </form>
    </div>
</div><br>



    <div class="row">
        <div class="col-12">
          <div id="lista_usuarios" class="card my-4">
                <!--MUESTRA LA TABLA LISTA DE USUARIOS-->
          </div>
        </div>
      </div>
    </div>

<?php require_once("../Templates/footer.php"); ?>