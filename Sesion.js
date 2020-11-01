function IniciarSesion() {
  var Cedula = document.getElementById("Cedula").value;
  var Pass = document.getElementById("password").value;

  if (Cedula === "" && Pass === "") {
    Swal.fire({
      icon: "warning",
      text: "Debe Llenar Todos Los Campos.",
      title: "Alerta",
    });
    return false;
  }
  if (isNaN(Cedula) == true) {
    Swal.fire({
      icon: "warning",
      text: "El Campo Cedula No Puede Tener Letras.",
      title: "Alerta",
    });
    return false;
  }
  if (Cedula === "") {
    Swal.fire({
      icon: "warning",
      text: "Debe Llenar El Campo De Cedula.",
      title: "Alerta",
    });
    return false;
  }
  if (Pass === "") {
    Swal.fire({
      icon: "warning",
      text: "Debe Llenar El Campo De Contraseña.",
      title: "Alerta",
    });
    return false;
  }

  $.ajax({
    type: "POST",
    url: "Funciones/Php/iniciarSesion_controller.php",
    data: $("#Formulario").serialize(),
    success: function (r) {
      if (r == "Inicio Sesion Correctamente.") {
        Swal.fire({
          icon: "success",
          title: "Inicio De Sesion",
          text: r,
        }).then(function () {
          window.location = "Principal.php";
        });
      } else {
        Swal.fire({
          icon: "error",
          title: "Inicio De Sesion",
          text: r,
        });
      }
    },
    error: function (e) {
      Swal.fire({
        icon: "error",
        title: "Error",
        text: e,
      });
    },
  });
  return false;
}
function CerrarSesion() {
  Swal.fire({
    title: "Cerrar Sesion",
    text: "¿Esta Seguro Que Quiere Cerrar Sesion?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "rgb(85, 188, 160)",
    cancelButtonColor: "rgb(41,43,44)",
    confirmButtonText: "Si, Cerrar!",
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        url: "Funciones/Php/cerrarSesion_controller.php",
        data: $("#Formulario").serialize(),
        success: function (r) {
          if (r == "Se Cerro Con Exito La Sesion.") {
            Swal.fire({
              icon: "success",
              title: "Cerrar Sesion",
              text: r,
            }).then(function () {
              window.location = "Login.php";
            });
          } else {
            Swal.fire({
              icon: "error",
              title: "Cerrar Sesion",
              text: r,
            });
          }
        },
        error: function (e) {
          Swal.fire({
            icon: "error",
            title: "Error",
            text: e,
          });
        },
      });
      return false;
    }
  });
}

//Creador: Mateo Fonseca
