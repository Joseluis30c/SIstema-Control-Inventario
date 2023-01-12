//MOSTRAR LAS LISTAS DE TABLAS
$(document).ready(function () {
    readCli();
    readPro();
    readCat();
    readUsu();
    readVenta();
});

///////////////////////  CLIENTE   ///////////////////////////////

//MOSTRAR Y/O OCULTAR EL REGISTRO DE CLIENTE
function mostrarCli() {
    var a = document.getElementById('cli');
    if (a.style.display === 'block') {
        a.style.display = 'none';
    } else {
        a.style.display = 'block';
    }
  }
  function ediCli() {
    var a = document.getElementById('ecli');
    if (a.style.display === 'block') {
        a.style.display = 'none';
    } else {
        a.style.display = 'block';
    }
  }
//AGREGAR CLIENTE
$(document).ready(function() {
    $(document).on('submit', '#addcli', function() { 

       //Obtenemos datos.
        var data = $(this).serialize(); 

        $.ajax({  
            type : 'POST',
            url  : 'crud/Cliente/add.php',
            data:  new FormData(this),
            contentType: false,
                  cache: false,
            processData:false,

            success:function(data) {  
                if(data=="OK"){
                    readCli();
                    $("#nombre").val("");
                    $("#apellido").val("");
                    $("#dni").val("");
                    $("#telefono").val("");
                    $("#direccion").val("");
                    $("#correo").val("");
                    mostrarCli() ;
                  
                }else{
                  alert(data);
                }
            }  
        });

        return false;
    });

});

//MOSTRAR DATOS DE EDITAR CLIENTE
function ediCliente(id){
    // Add ID 
    $("#id").val(id);
    $.post("crud/Cliente/readDetail.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var cli = JSON.parse(data);
            // Assing existing values
            $("#nombrec").val(cli.nombre);
            $("#apellidoc").val(cli.apellido);
            $("#dnic").val(cli.dni);
            $("#telefonoc").val(cli.telefono);
            $("#direccionc").val(cli.direccion);
            $("#correoc").val(cli.correo);
        }
    ); 
}

//EDITAR CLIENTE
$(document).ready(function() {
    $(document).on('submit', '#modcli', function() { 

       //Obtenemos datos.
        var data = $(this).serialize(); 

        $.ajax({  
            type : 'POST',
            url  : 'crud/Cliente/modCli.php',
            data:  new FormData(this),
            contentType: false,
                  cache: false,
            processData:false,

            success:function(data) {  
                if(data=="OK"){
                  readCli();
                  ediCli() ;
                  
                }else{
                  alert(data);
                }
            }  
        });

        return false;
    });

});
// LISTA CLIENTE
function readCli() {
    $.get("crud/Cliente/read.php", {}, function (data, status) {
        $("#records_content").html(data);
    });
}

//ELIMINAR CLIENTE
function DeleteCli(id) {
    var conf = confirm("¿Está seguro que desea eliminar el registro?");
    if (conf == true) {
        $.post("crud/Cliente/deleteCli.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readCli();
            }
        );
    }
}

///////////////////////  USUARIO   ///////////////////////////////

//MOSTRAR Y/O OCULTAR EL REGISTRO DE USUARIO
function mostrarUsu() {
    var a = document.getElementById('usu');
    if (a.style.display === 'block') {
        a.style.display = 'none';
    } else {
        a.style.display = 'block';
    }
  }
  function ediUsu() {
    var a = document.getElementById('usus');
    if (a.style.display === 'block') {
        a.style.display = 'none';
    } else {
        a.style.display = 'block';
    }
  }
  //AGREGAR USUARIO
  $(document).ready(function() {
    $(document).on('submit', '#addusu', function() { 

       //Obtenemos datos.
        var data = $(this).serialize(); 

        $.ajax({  
            type : 'POST',
            url  : 'crud/Usuarios/add.php',
            data:  new FormData(this),
            contentType: false,
                  cache: false,
            processData:false,

            success:function(data) {  
                if(data=="OK"){
                    readUsu();
                    $("#nombre").val("");
                    $("#apellido").val("");
                    $("#dni").val("");
                    $("#telefono").val("");
                    $("#correo").val("");
                    $("#contraseña").val("");
                    mostrarUsu() ;
                  
                }else{
                  alert(data);
                }
            }  
        });

        return false;
    });

});

// LISTA USUARIO
function readUsu() {
    $.get("crud/Usuarios/read.php", {}, function (data, status) {
        $("#lista_usuarios").html(data);
    });
}

//MOSTRAR LOS VALORES USUARIOS
function ediUsuario(id) {
    // Add ID 
    $("#id").val(id);
    $.post("crud/Usuarios/readDetail.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var usu = JSON.parse(data);
            // Assing existing values
            $("#nombreu").val(usu.nombre);
            $("#apellidou").val(usu.apellido);
            $("#dniu").val(usu.dni);
            $("#telefonou").val(usu.telefono);
            $("#correou").val(usu.correo);
            $("#contraseñau").val(usu.contra);
        }
    ); 
}

//EDITAR USUARIO
$(document).ready(function() {
    $(document).on('submit', '#modusu', function() { 

       //Obtenemos datos.
        var data = $(this).serialize(); 

        $.ajax({  
            type : 'POST',
            url  : 'crud/Usuarios/modUsu.php',
            data:  new FormData(this),
            contentType: false,
                  cache: false,
            processData:false,

            success:function(data) {  
                if(data=="OK"){
                  readUsu();
                  ediUsu() ;
                  
                }else{
                  alert(data);
                }
            }  
        });

        return false;
    });

});

//ELIMINAR USUARIO
function DeleteUsu(id) {
    var conf = confirm("¿Está seguro que desea eliminar el registro?");
    if (conf == true) {
        $.post("crud/Usuarios/deleteUsu.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readUsu();
            }
        );
    }
}

/////////////////////// PRODUCTOS ////////////////////////////

//MOSTRAR Y/O OCULTAR EL REGISTRO DE PRODUCTO
function mostrarProdu() {
    var x = document.getElementById('agregar');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
        
    }
  };
function ediProdu() {
    var x = document.getElementById('editar');
    if (x.style.display === 'block') {
        x.style.display = 'none';
    } else {
        x.style.display = 'block';
        
    }
  };

 //AGREGAR PRODUCTO
 $(document).ready(function() {
    $(document).on('submit', '#agregarprodu', function() { 

       //Obtenemos datos.
        var data = $(this).serialize(); 

        $.ajax({  
            type : 'POST',
            url  : 'crud/Producto/add.php',
            data:  new FormData(this),
            contentType: false,
                  cache: false,
            processData:false,

            success:function(data) {  
                if(data=="OK"){
                  readPro();
                  $("#producto").val("");
                  $("#precio").val("");
                  $("#stock").val("");
                  $("#descripcion").val("");
                  $("#categoria").val("0");
                  $("#uploadImage1").val("");
                  document.getElementById("uploadPreview1").src="https://ru.seaicons.com/wp-content/uploads/2015/06/Preview-icon1.png";
                  
                  mostrarProdu() ;
                  
                }else{
                  alert(data);
                }
            }  
        });

        return false;
    });

});

//PREVISUALIZACION DE LA IMAGEN AL REGISTRAR
function previewImage(nb) {
    var reader = new FileReader();
    reader.readAsDataURL(document.getElementById('uploadImage' + nb).files[0]);
    reader.onload = function (e) {
      document.getElementById('uploadPreview' + nb).src = e.target.result;
    };
  }
// LISTA PRODUCTO
function readPro() {
    $.get("crud/Producto/read.php", {}, function (data, status) {
        $("#lista_producto").html(data);
    });
}

//MOSTRAR LOS VALORES PRODUCTO
function ediProducto(id) {
    // Add ID 
    $("#idp").val(id);
    $.post("crud/Producto/readDetail.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var pro = JSON.parse(data);
            // Assing existing values
            $("#preciop").val(pro.precio);
            $("#categoriap").val(pro.id_categoria);
            $("#stockp").val(pro.stock);
            $("#descripcionp").val(pro.descripcion);
            $("#nombrep").val(pro.nombre);
            //$("#uploadImage1").val(pro.imagen);

        }
    ); 
}

//EDITAR PRODUCTO
$(document).ready(function() {
    $(document).on('submit', '#modpro', function() { 

       //Obtenemos datos.
        var data = $(this).serialize(); 

        $.ajax({  
            type : 'POST',
            url  : 'crud/Producto/modPro.php',
            data:  new FormData(this),
            contentType: false,
                  cache: false,
            processData:false,

            success:function(data) {  
                if(data=="OK"){
                  readPro();
                  ediProdu() ;
                  
                }else{
                  alert(data);
                }
            }  
        });

        return false;
    });

});

//ELIMINAR PRODUCTO
function DeletePro(id) {
    var conf = confirm("¿Está seguro, realmente desea eliminar el registro?");
    if (conf == true) {
        $.post("crud/Producto/deletePro.php", {
                id: id
            },
            function (data, status) {
                readPro();
            }
        );
    }
}

///////////////////////  CATEGORIA   ///////////////////////////////

//MOSTRAR Y/O OCULTAR EL REGISTRO DE CATEGORIA
function mostrarCat() {
    var a = document.getElementById('cat');
    if (a.style.display === 'block') {
        a.style.display = 'none';
    } else {
        a.style.display = 'block';
    }
  };
  function ediCat() {
    var a = document.getElementById('cate');
    if (a.style.display === 'block') {
        a.style.display = 'none';

    } else {
        a.style.display = 'block';
    }
  };
  //AGREGAR CATEGORIA
  $(document).ready(function() {
    $(document).on('submit', '#addcat', function() { 

       //Obtenemos datos.
        var data = $(this).serialize(); 

        $.ajax({  
            type : 'POST',
            url  : 'crud/Producto/addCat.php',
            data:  new FormData(this),
            contentType: false,
                  cache: false,
            processData:false,

            success:function(data) {  
                if(data=="OK"){
                  readCat();
                  $("#categoria").val("");
                  mostrarCat() ;
                  
                }else{
                  alert(data);
                }
            }  
        });

        return false;
    });

});
// LISTA CATEGORIA
function readCat() {
    $.get("crud/Producto/readCat.php", {}, function (data, status) {
        $("#lista_categoria").html(data);
    });
}

//MOSTRAR LOS VALORES CATEGORIA
function ediCategoria(id) {
    // Add ID 
    $("#id").val(id);
    $.post("crud/Producto/readCatDetail.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var usu = JSON.parse(data);
            // Assing existing values
            $("#nomcat").val(usu.nombre_categoria);
        }
    ); 
}

//EDITAR CATEGORIA
$(document).ready(function() {
    $(document).on('submit', '#modcat', function() { 

       //Obtenemos datos.
        var data = $(this).serialize(); 

        $.ajax({  
            type : 'POST',
            url  : 'crud/Producto/modCat.php',
            data:  new FormData(this),
            contentType: false,
                  cache: false,
            processData:false,

            success:function(data) {  
                if(data=="OK"){
                  readCat();
                  ediCat() ;
                  
                }else{
                  alert(data);
                }
            }  
        });

        return false;
    });

});

//ELIMINAR CATEGORIA
function DeleteCat(id) {
    var conf = confirm("¿Está seguro que desea eliminar el registro?");
    if (conf == true) {
        $.post("crud/Producto/deleteCat.php", {
                id: id
            },
            function (data, status) {
                readCat();
            }
        );
    }
}
