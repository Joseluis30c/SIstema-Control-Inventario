//MOSTRAR LAS LISTAS DE TABLAS
$(document).ready(function () {
    readCompra();
});
///////////////////////  COMPRAS   ///////////////////////////////

//MOSTRAR Y/O OCULTAR EL REGISTRO DE COMPRAS

function mostrarCompra() {
    var a = document.getElementById('compras');
    if (a.style.display === 'block') {
        a.style.display = 'none';
    } else {
        a.style.display = 'block';
    }
  }
function verCompra() {
    var a = document.getElementById('vercompra');
    if (a.style.display === 'block') {
        a.style.display = 'none';
    } else {
        a.style.display = 'block';
    }
  }
  //AGREGAR COMPRA
  $(document).ready(function() {
    $(document).on('submit', '#addcompra', function() { 

       //Obtenemos datos.
        var data = $(this).serialize(); 

        $.ajax({  
            type : 'POST',
            url  : 'crud/Compras/add.php',
            data:  new FormData(this),
            contentType: false,
                  cache: false,
            processData:false,

            success:function(data) {  
                if(data=="OK"){
                    readCompra();
                    $("#producto").val("0");
                    $("#talla").val("0");
                    $("#precio").val("");
                    $("#cantidad").val("");
                    $("#total").val("");
                    mostrarCompra() ;
                  
                }else{
                  alert(data);
                }
            }  
        });

        return false;
    });

});

//MOSTRAR LOS VALORES COMPRAS
function ediCompra(id) {
    // Add ID 
    $("#id").val(id);
    $.post("crud/Compras/readDetail.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var compra = JSON.parse(data);
            // Assing existing values
            $("#productoc").val(compra.nombre);
            $("#tallac").val(compra.talla);
            $("#precioc").val(compra.precio_compra);
            $("#cantidadc").val(compra.cantidad);
            $("#totalc").val(compra.total);
        }
    ); 
}

// LISTA COMPRAS
function readCompra() {
    $.get("crud/Compras/read.php", {}, function (data, status) {
        $("#listar_compras").html(data);
    });
}

function sum() {
    var precio = document.getElementById('precio').value;
    var cantidad = document.getElementById('cantidad').value;

    var result = parseFloat(precio) * parseFloat(cantidad);
    
    if (!isNaN(result)) {
        document.getElementById('total').value = result;
    }
}

window.onload = function() {
    sum();
}