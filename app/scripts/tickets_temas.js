$.ajax({
  url: "../php/tickets_tema.php",
  method: "POST",
  success: function(respuesta){
    $("#contenido").html(respuesta);
  }
}) 