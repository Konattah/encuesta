document.addEventListener("DOMContentLoaded", function () {
    // Seleccionar el elemento <select> por su id
    var selectRegion = document.getElementById("region");
  
    // Crear una nueva solicitud XMLHttpRequest
    var xhr = new XMLHttpRequest();
  
    // Configurar la solicitud GET para obtener el JSON de regiones
    xhr.open("GET", "../../assets/php/obtener_regiones.php", true);
  
    // Configurar la función de devolución de llamada cuando la solicitud esté lista
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        // Analizar el JSON recibido
        var regiones = JSON.parse(xhr.responseText);
  
        // Iterar sobre las regiones y agregar opciones al <select>
        regiones.forEach(function (region) {
          var option = document.createElement("option");
          option.value = region.id_region;
          option.text = region.nombre_region;
          selectRegion.add(option);
        });
      }
    };
  
    // Enviar la solicitud
    xhr.send();
  });
