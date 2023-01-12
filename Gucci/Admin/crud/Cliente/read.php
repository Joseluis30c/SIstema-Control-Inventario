<?php
	// include Database connection file 
	include("../../../Conexion/conexion.php");

	// Design initial table header 
	$data = '<div  class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
    <div style="background-color: #a11826;" class="bg-gradient border-radius-lg pt-4 pb-3">
      <h6 class="text-white text-capitalize ps-3">Tabla Clientes</h6>
    </div>
  </div>
  <div class="card-body px-0 pb-2">
    <div class="table-responsive p-0">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button style="background: #204030" onclick="mostrarCli()"class="btn btn-success" >Agregar</button>
  <div style="float: right;">
    <input type="text" id="buscar" name="buscar" maxlength="40" autocomplete="off" class="form-control" placeholder="Buscar...">
  </div>
      <table class="table align-items-center mb-0">
        <thead>
          <tr class="align-middle text-center">
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Apellido</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dni</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Teléfono</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dirección</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Correo</th>
            <th class="text-secondary opacity-7"></th>
          </tr>
        </thead>';

	$query = "SELECT * FROM cliente";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '
            <tr class="align-middle text-center">
              <td>
                <p class="text-xs text-secondary mb-0">'.$number.'</p>
              </td>
              <td>
                <p class="text-xs text-secondary mb-0">'.$row['nombre'].'</p>
              </td>
              <td>
                <p class="text-xs text-secondary mb-0">'.$row['apellido'].'</p>
              </td>
              <td>
                <p class="text-xs text-secondary mb-0">'.$row['dni'].'</p>
              </td>
              <td>
                <p class="text-xs text-secondary mb-0">'.$row['telefono'].'</p>
              </td>
              <td>
                <p class="text-xs text-secondary mb-0">'.$row['direccion'].'</p>
              </td>
              <td>
                <p class="text-xs text-secondary mb-0">'.$row['correo'].'</p>
              </td>
              <td class="align-middle">
              <a onclick="ediCli();ediCliente('.$row['id_cliente'].')" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Editar
            </a>
              &nbsp;&nbsp;/&nbsp;&nbsp;
              <a onclick="DeleteCli('.$row['id_cliente'].')" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                Eliminar
              </a>
              </td>
            </tr>
          ';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr class="align-middle text-center"><td colspan="7"><p class="text-xs text-secondary mb-0">No hay registros!</p></td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>