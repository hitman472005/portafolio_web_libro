$(window).on("load", function () {
  // Ocultar la pantalla de carga después de 5 segundos
  setTimeout(function () {
    $(".loading-screen").fadeOut("slow");
  }, 3000);
});
