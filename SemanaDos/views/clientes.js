var init = () => {
    $("#frm_clientes").on("submit", (e) => {
      guardaryeditar(e);
    });
  };
  
  $().ready(() => {
    cargaTabla();
  });
  
  var cargaTabla = () => {
    $.get("../controllers/clientes.controller.php?op=todos", (listaClientes) => {
      var html = "";
      console.log(listaClientes);
      listaClientes = JSON.parse(listaClientes);
      console.log(listaClientes);
      $.each(listaClientes, (index, cliente) => {
        html += `<tr>
                  <td>${index + 1}</td>
                  <td>${cliente.Nombres}</td>
                  <td>${cliente.Direccion}</td>
                  <td>${cliente.Telefono}</td>
                  <td>${cliente.Cedula}</td>
                  <td>${cliente.Correo}</td>
                  <td><button class="btn btn-primary">Editar</button> <button class="btn btn-danger">Eliminar</button></td>
                  </tr>
                  `;
      });
      $("#cuerpoCliente").html(html);
    });
  };
  
  var guardaryeditar = (e) => {
    e.preventDefault();
    var formData = new FormData($("#frm_clientes")[0]);
    $.ajax({
      url: "../controllers/clientes.controller.php?op=insertar",
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      success: function (datos) {
        console.log(datos);
        $("#frm_clientes")[0].reset();
        $("#modal").modal("hide");
        cargaTabla();
      },
    });
  };
  
  init();