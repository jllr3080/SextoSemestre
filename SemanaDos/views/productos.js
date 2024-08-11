var init = () => {
    $("#frm_productos").on("submit", (e) => {
      guardaryeditar(e);
    });
  };
  
  $().ready(() => {
    cargaTabla();
  });
  


  var cargaTabla = () => {
    $.get("../controllers/productos.controller.php?op=todos", (listaProductos) => {
      var html = "";
      console.log(listaProductos);
      listaProductos = JSON.parse(listaProductos);
      console.log(listaProductos);
      $.each(listaProductos, (index, producto) => {
        html += `<tr>
                  <td>${index + 1}</td>
                  <td>${producto.Codigo_Barras}</td>
                  <td>${producto.Nombre_Producto}</td>
                  <td>${producto.Graba_IVA}</td>
                  <td><button class="btn btn-primary">Editar</button> <button class="btn btn-danger">Eliminar</button></td>
                  </tr>
                  `;
      });
      $("#cuerpoProducto").html(html);
    });
  };
  
  var guardaryeditar = (e) => {
    e.preventDefault();
    var formData = new FormData($("#frm_productos")[0]);
    $.ajax({
      url: "../controllers/productos.controller.php?op=insertar",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        console.log(datos);
        $("#frm_productos")[0].reset();
        $("#modal").modal("hide");
        cargaTabla();
      },
    });
  };
  
  init();


  