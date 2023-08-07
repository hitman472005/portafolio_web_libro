<?php
    include("header.php");
    #include("carga.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>La Fiesta del chivo</title>

<main>

<!-- Introducción -->
<section id="introduccion" class="bg-light">
    <div class="container">
      <div class="row align-items-center">
        <center>

            <div class="col-lg-12">
              <h1 class="mb-4">La Fiesta del Chivo</h1>
              <p class="lead mb-4">Descubre la obra cumbre del escritor peruano Mario Vargas Llosa, una novela que explora los últimos días de la dictadura de Rafael Trujillo en República Dominicana.</p>
              <a href="#argumento" class="btn btn-primary btn-lg">Conoce más</a>
            </div>
        </center>
      
        
      </div>
    </div>
  </section>
  <br>



  <section id="argumento">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Argumento y temática</h2>
        <p>La fiesta del chivo es una novela histórica que relata los últimos días del régimen dictatorial de Rafael Leónidas Trujillo en la República Dominicana. La obra se centra en la figura del dictador y en cómo su poder absoluto corrompió la sociedad dominicana y afectó a la vida de sus ciudadanos.</p>
        <p>A través de la novela, Vargas Llosa aborda temas como la dictadura, el poder, la corrupción, la violencia política y la opresión. Además, la obra también explora la relación entre el arte y la política, y cómo la literatura puede ser una herramienta para desafiar la autoridad y luchar por la libertad y la democracia.</p>
      </div>
    </div>
  </div>
</section>



<style>
    .labores {
    background-color: #ffffff;
    padding: 80px 0;
  }
  
  .labores-titulo {
    text-align: center;
    margin-bottom: 50px;
    font-size: 2.5rem;
    color: #333;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
  }
  
  .labores-item {
    text-align: center;
    margin-bottom: 40px;
    position: relative;
    transition: all 0.3s ease-in-out;
  }
  
  .labores-item:hover {
    transform: translateY(-10px);
  }
  
  .labores-icono {
    font-size: 4rem;
    color: #333;
    background-color: #fff;
    padding: 20px;
    border-radius: 50%;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    position: absolute;
    top: -35px;
    left: 50%;
    transform: translateX(-50%);
  }
  
  .labores-descripcion {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #555;
    margin-top: 70px;
    padding: 0 30px;
    opacity: 0.8;
    transition: all 0.3s ease-in-out;
  }
  
  .labores-item:hover .labores-descripcion {
    opacity: 1;
  }
  
  @media (max-width: 767px) {
    .labores-icono {
      top: -30px;
    }
    .labores-descripcion {
      margin-top: 50px;
    }
  }
    
      
</style>

           

<section id="labores-realizadas" class="labores">
  <div class="container">
    <h2 class="labores-titulo" data-aos="flip-down" data-aos-duration="1000">Secciones destacadas e importantes</h2>
    <div class="row">
      <div class="col-md-4 labores-item" data-aos="flip-left" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fa-solid fa-bridge-water" style="color: #005eff;"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 1: "El puerto de Santo Domingo"
        El capítulo comienza con la llegada de Urania Cabral, una abogada que regresa a su país después de treinta y cinco años de ausencia. La novela presenta la ciudad de Santo Domingo a través de sus ojos y describe cómo la ciudad ha cambiado desde su infancia.</p>       
      </div>
      <div class="col-md-4 labores-item" data-aos="flip-left" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-home" style="color: green;"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 2: "El regreso" Urania llega a la casa de su padre, Agustín Cabral, quien ha estado enfermo desde hace varios años. La novela revela que Urania ha mantenido una relación distante con su padre, debido a un trauma de su infancia que se irá desvelando a lo largo de la trama.</p>       
      </div>
      <div class="col-md-4 labores-item" data-aos="flip-left" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-camera" style="color: #ff69b4"></i></i></h3> <br>
        <p class="labores-descripcion">Capítulo 3: "La fotografía" Urania recuerda una foto que su padre tenía en su oficina cuando ella era niña, en la que aparece Trujillo, el dictador que ha gobernado la República Dominicana durante más de 30 años. La novela describe la figura de Trujillo y cómo su presencia ha marcado la vida de los dominicanos.</p>  
      </div>
        <div class="col-md-4 labores-item"  data-aos="flip-up" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-clone"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 4: "El espejo" En este capítulo, se narra la infancia de Urania y cómo su padre la obligaba a hacerle compañía en sus visitas a Trujillo. Urania también recuerda la muerte de su mejor amiga, Gladys, en un accidente que implica a Trujillo y que la afectará para siempre.</p>   
      </div>
      <div class="col-md-4 labores-item"  data-aos="flip-up" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-moon" style="color: #f4a460"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 5: "La primera noche" Urania es visitada por su tía, Doña Ana, quien le cuenta detalles sobre el estado de salud de su padre. La novela también presenta a otros personajes, como Joaquín Balaguer, un colaborador de Trujillo y una figura importante en la política dominicana.</p>   
      </div>
      <div class="col-md-4 labores-item"  data-aos="flip-up" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-utensils" style="color: #32cd32"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 6: "La cena" Agustín Cabral invita a Urania a cenar y se desencadena una confrontación entre padre e hija. Urania acusa a su padre de haberla obligado a tener relaciones sexuales con Trujillo cuando era niña y lo culpa de la muerte de Gladys. La novela presenta un retrato desgarrador del abuso de poder y la corrupción en la sociedad dominicana bajo el régimen de Trujillo.</p>   
      </div>
        <div class="col-md-4 labores-item" data-aos="flip-left" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-user-friends" style="color: #9932cc"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 7: "La vejez" El capítulo comienza con Trujillo reflexionando sobre su vida y su legado. La novela presenta al dictador como un hombre envejecido y paranoico, que teme por su seguridad y su poder.</p>  </div>
        <div class="col-md-4 labores-item" data-aos="flip-left" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-file-alt" style="color: #ffa500"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 8: "El informe" Trujillo recibe un informe que le informa sobre un complot para asesinarlo. La novela describe la paranoia del dictador y su obsesión con la seguridad.</p> 
      </div>
        <div class="col-md-4 labores-item" data-aos="flip-left" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-moon" style="color: #8fbc8f"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 9: "La noche" Trujillo sale a cenar con su hijo, Ramfis, y sus colaboradores cercanos. La novela presenta el ambiente opulento y decadente de la sociedad dominicana bajo el régimen de Trujillo.</p>     
         </div>
        <div class="col-md-4 labores-item"  data-aos="flip-up" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-users" style="color: #9370db"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 10: "La reunión" Trujillo se reúne con su círculo íntimo de colaboradores, conocido como "los doce apóstoles". La novela presenta la complejidad de las relaciones de poder dentro del régimen y las tensiones entre los miembros del grupo.</p>
     </div >    
        <div class="col-md-4 labores-item"  data-aos="flip-up" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-hand-holding"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 11: "El jefe de seguridad" El jefe de seguridad de Trujillo, Johnny Abbes, juega un papel importante en la trama, y el capítulo presenta detalles sobre su vida y su relación con el dictador.</p>   
         </div>
        <div class="col-md-4 labores-item"  data-aos="flip-up" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-envelope" style="color: #00bfff"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 12: "El mensajero" El capítulo presenta la figura de Antonio de la Maza, un abogado que se une al complot para asesinar a Trujillo. La novela describe la motivación del personaje y las circunstancias que lo llevaron a tomar esta decisión.</p>   
         </div>
        <div class="col-md-4 labores-item"  data-aos="flip-up" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-phone" style="color: #dc143c"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 13: "El teléfono" Trujillo recibe una llamada anónima que lo alerta sobre el complot para asesinarlo. La novela presenta el clímax de la trama, con la tensión creciente y la inevitable conclusión del asesinato del dictador.</p> 
         </div>
        <div class="col-md-4 labores-item"  data-aos="flip-up" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-trophy" style="color: red;"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 14:"El triunfo del miedo". En esta parte de la novela, se narran los acontecimientos posteriores al asesinato de Trujillo y cómo el régimen intenta mantenerse en el poder a pesar de la muerte del dictador.</p>  </div>
        <div class="col-md-4 labores-item"  data-aos="flip-up" data-aos-duration="1000">
        <h3 class="labores-icono"><i class="fas fa-star" style="color: purple;"></i></h3> <br>
        <p class="labores-descripcion">Capítulo 15: "El final del comienzo". Se describe el clima de miedo y tensión que se vive en Santo Domingo después del asesinato de Trujillo. La ciudad está llena de rumores y de gente que se prepara para lo peor. Se forman grupos de personas que intentan tomar el control de las calles y la situación es muy incierta. </p>   
         </div>

   </div>
</section>



<h1 class="text-center"  data-aos="zoom-in-up" data-aos-duration="1000">Documental realizado por los estudiantes de 6toE</h1>
                <div class="row">
                    <div class="col-md-12"  data-aos="fade-right" data-aos-duration="1000">
                        <center>

                            <video width="740" height="700" autoplay controls preload="auto"> 
                                <source src="gente/La fiesta del chivo Documental .mp4" type="video/mp4"/>
                            </video>
                        </center>
                    </div>
                   
                </div>

                    <div style="background-color: #F2F2F2; padding: 30px; text-align: center;">
                    <h2 style="color: #3D3D3D;">Reseñas de "La Fiesta del Chivo"</h2>
                    <div style="display: flex; justify-content: space-around; margin-top: 40px;">
                    <div>
                    <i class="fas fa-quote-left" style="color: #FFC107; font-size: 50px;"></i>
                    <p style="color: #3D3D3D; font-size: 18px; margin-top: 20px;">"Un retrato magistral de la tiranía y el terror en la República Dominicana. Vargas Llosa teje una trama increíblemente emocionante e impactante. No puedo recomendarlo lo suficiente."</p>
                    <p style="color: #3D3D3D; font-size: 16px; margin-top: 10px;">- Mathew Acevedo, crítico literario</p>
                    </div>
                    <div>
                    <i class="fas fa-quote-left" style="color: #E91E63; font-size: 50px;"></i>
                    <p style="color: #3D3D3D; font-size: 18px; margin-top: 20px;">"Un libro impresionante que no deja a nadie indiferente. La descripción detallada de los personajes y los eventos te mantiene en vilo hasta la última página. Un verdadero clásico de la literatura latinoamericana."</p>
                    <p style="color: #3D3D3D; font-size: 16px; margin-top: 10px;">- Diana Lugo, autora</p>
                    </div>
                    <div>
                    <i class="fas fa-quote-left" style="color: #673AB7; font-size: 50px;"></i>
                    <p style="color: #3D3D3D; font-size: 18px; margin-top: 20px;">"Un relato que te hace reflexionar sobre la naturaleza humana y la corrupción del poder. La prosa es excelente, llena de detalles y descripciones que te transportan a la época y al lugar. Un libro imprescindible."</p>
                    <p style="color: #3D3D3D; font-size: 16px; margin-top: 10px;">- Chiqui Borromé, lector apasionado</p>
                    </div>
                </div>


</main>


 	<!-- Font Awesome -->
     <script src="https://kit.fontawesome.com/123456789.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    

</body>
</html>