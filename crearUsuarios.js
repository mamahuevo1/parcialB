function crearUsuarios() {
  var nombre = document.getElementById("Nombre");
  var apellido = document.getElementById("Apellido");
  var correo = document.getElementById("Correo");
  var Cedula = document.getElementById("Cedula");
  var pass = document.getElementById("Contraseña");
  var rpass = document.getElementById("Rcontraseña");

  if (
    nombre.value === "" ||
    apellido.value === "" ||
    correo.value === "" ||
    pass.value === "" ||
    rpass.value === "" ||
    Cedula.value === ""
  ) {
    Swal.fire({
      icon: "warning",
      text: "Debe Llenar Todos Los Campos.",
      title: "Alerta",
    });
    return false;
  } else {
    if (nombre.value.length > 15) {
      Swal.fire({
        icon: "warning",
        text: "El Nombre Es Muy Largo",
        tittle: "Alerta",
      });
      return false;
    }

    if (
      nombre.value.indexOf(" ") !== -1 ||
      apellido.value.indexOf(" ") !== -1
    ) {
      Swal.fire({
        icon: "warning",
        text: "Apellido Y Nombre No Pueden Tener Espacios.",
        title: "Alerta",
      });
      return false;
    }

    if (apellido.value.length > 15) {
      Swal.fire({
        icon: "warning",
        text: "El Apellido Es Muy Largo",
        title: "Alerta",
      });
      return false;
    }

    if (correo.value.length > 30) {
      Swal.fire({
        icon: "warning",
        text: "El Correo Es Muy Largo",
        title: "Alerta",
      });
      return false;
    }

    //evalua la forma de un correo
    if (!/\w+@\w+\.+\w/.test(correo.value)) {
      Swal.fire({
        icon: "warning",
        text: "Correo No Valido.",
        title: "Alerta",
      });
      return false;
    }

    if (Cedula.value.length > 15) {
      Swal.fire({
        icon: "warning",
        text: "Cedula Es Muy Larga.",
        title: "Error",
      });
      return false;
    }
    if (isNaN(Cedula.value) == true) {
      Swal.fire({
        icon: "warning",
        text: "El Campo Cedula No Puede Tener Letras.",
        title: "Alerta",
      });
      return false;
    }
    if (pass.value != rpass.value) {
      Swal.fire({
        icon: "warning",
        text: "Las Contraseñas No Son Iguales.",
        title: "Alerta",
      });
      return false;
    }

    if (pass.value == Cedula.value) {
      Swal.fire({
        icon: "warning",
        text: "La Contraseña No Puede Ser Igual Que La Cedula.",
        title: "Alerta",
      });
      return false;
    }

    if (pass.value.length < 8 || rpass.value.length < 8) {
      Swal.fire({
        icon: "warning",
        text: "La Contrasela Es Muy Corta.",
        title: "Alerta",
      });
      return false;
    } else {
      if (pass.value.length > 16 || rpass.value.length > 16) {
        Swal.fire({
          icon: "warning",
          text: "La Contraseña Es Muy Largo",
          title: "Alerta",
        });
        return false;
      }
    }
  }
  $.ajax({
    type: "POST",
    url: "Funciones/Php/crearUsuario_controller.php",
    data: $("#Formulario").serialize(),
    success: function (r) {
      if (r == "Ya Existe Ese Correo.") {
        Swal.fire({
          icon: "error",
          title: "Correo",
          text: r,
        });
      } else {
        if (r == "Ya Existe Ese Usuario.") {
          Swal.fire({
            icon: "error",
            title: "Cedula",
            text: r,
          });
        } else {
          Swal.fire({
            icon: "success",
            title: "Registrado",
            text: r,
          }).then(function () {
            window.location = "Login.php";
          });
        }
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

//Creador: Mateo Fonseca
