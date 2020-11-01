function user() {
  $.ajax({
    type: "POST",
    url: "Funciones/Php/user_controller.php",
    success: function (r) {
      if (r == "1") {
        Swal.fire({
          icon: "warning",
          title: "No Puede Acceder",
          text: "No Hay Una Seccion. Inicie Sesion",
        }).then(function () {
          window.location = "Login.php";
        });
      } else {
        $("#Estudiante").html(r);
      }
    },
    error: function (e) {
      $("#Estudiante").html(e);
    },
  });
  return false;
}
function ActulizarFoto() {
  var formData = new FormData();
  var Imagen = $("#Foto")[0].files[0];
  formData.append("I", Imagen);

  $.ajax({
    type: "POST",
    url: "Funciones/Php/actulizarFoto_controller.php",
    data: formData,
    contentType: false,
    processData: false,
    success: function (r) {
      Swal.fire({
        icon: "success",
        title: "Foto De Perfil",
        text: "Se Actilizado Con Exito",
      }).then(function () {
        $("#perfil").html(
          '<img id="perfil" class="perfil" src="' +
            r +
            '" alt="Foto De perfil" title="perfil">'
        );
      });
    },
    error: function (e) {
      Swal.fire({
        icon: "error",
        title: "Foto De Perfil",
        text: e,
      });
    },
  });
  return false;
}
function Buscar() {
  $.ajax({
    url: "Funciones/Php/MostraEstudiantes_controller.php",
    type: "POST",
    data: $("#buscar").serialize(),
    success: function (r) {
      if (r == "1") {
        Swal.fire({
          icon: "warning",
          text: "No Esta En Este Registro.",
          title: "Alerta",
        });

        $("#Resultado").html(
          '<h1 class="text-center"><i class="fas fa-exclamation-circle"></i>&nbsp;No Hay Registro</h1>'
        );
        return false;
      } else {
        $("#Resultado").html(r);
      }
    },
  });
  return false;
}
function Alumno() {
  $("#bienvenida").hide();
  $("#Alumnos").show();
}
function Borrar(boton) {
  Swal.fire({
    title: "¿Estas Seguro?",
    text: "Esto No Se Puede Deshacer",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "rgb(85, 188, 160)",
    cancelButtonColor: "rgb(41,43,44)",
    confirmButtonText: "Si, Borrar!",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        url: "Funciones/php/borrar_controller.php",
        data: $("#id" + boton.value).serialize(),
        success: function (r) {
          Swal.fire("Borrado Con Exito", r, "success");
        },
        error: function (e) {
          Swal.fire({
            icon: "Error",
            text: e,
            title: "Ocurrrio Un Error",
          });
        },
      });
      return false;
    }
  })
}
