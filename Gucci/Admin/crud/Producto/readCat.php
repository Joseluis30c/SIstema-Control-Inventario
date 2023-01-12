<?php
	// include Database connection file 
	include("../../../Conexion/conexion.php");

	// Design initial table header 
	$data = '<div  class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
    <div style="background-color: #a11826;" class="bg-gradient border-radius-lg pt-4 pb-3">
      <h6 class="text-white text-capitalize ps-3">Tabla Categorías</h6>
    </div>
  </div>
  <div class="card-body px-0 pb-2">
    <div class="table-responsive p-0">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button style="background: #204030" onclick="mostrarCat()"class="btn btn-success" >Agregar</button>
  <div style="float: right;">
    <input type="text" class="form-control" placeholder="Buscar...">
  </div>
      <table class="table align-items-center mb-0">
        <thead>
          <tr class="align-middle text-center">
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Categoría</th>
            <th class="text-secondary opacity-7"></th>
          </tr>
        </thead>';

	$query = "SELECT * FROM categoria";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result))
    {
    	//
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '
            <tr class="align-middle text-center">
              <td>
                <p class="text-xs text-secondary mb-0">'.$row['id_categoria'].'</p>
              </td>
              <td>
                <p class="text-xs text-secondary mb-0">'.$row['nombre_categoria'].'</p>
              </td>
              <td class="align-middle">
                <a onclick="ediCat();ediCategoria('.$row['id_categoria'].')"class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                  Editar
                </a>
                &nbsp;&nbsp;/&nbsp;&nbsp;
                <a onclick="DeleteCat('.$row['id_categoria'].')" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                  Eliminar
                </a>
              </td>
            </tr>
          ';
    	//	$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr class="align-middle text-center"><td colspan="3"><p class="text-xs text-secondary mb-0">No hay registros!</p></td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>