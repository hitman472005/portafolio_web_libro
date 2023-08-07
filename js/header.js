// Selecciona el carrusel de imágenes
var myCarousel = document.querySelector('#carouselExampleIndicators');

// Crea un objeto de carrusel de imágenes usando el constructor de Bootstrap
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 5000, // Cambia de imagen cada 5 segundos
  wrap: true // Comienza de nuevo al llegar al final
})
