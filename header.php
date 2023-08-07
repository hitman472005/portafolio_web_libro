<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="icon" type="image/png" href="m.png">


<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .contenedor{
          background: url("img/autor.jpg") no-repeat center ;
            height: 100%;
            background-size:     cover;                      /* <------ */
            background-repeat:   no-repeat;
            background-position: center center;
      }
      .contenedor2{
          background: url("img/personajes.jpg") no-repeat center ;
            height: 100%;
            background-size:     cover;                      /* <------ */
            background-repeat:   no-repeat;
            background-position: center center;
      }


      .contenedor3{
          background: url("img/estudiantes.jpeg") no-repeat center ;
            height: 100%;
            background-size:     cover;                      /* <------ */
            background-repeat:   no-repeat;
            background-position: center center;
      }
      .contenedor::before {
        position: absolute;
        content: '';
        background-color: black;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: .5;
      }
      .contenedor2::before {
        position: absolute;
        content: '';
        background-color: black;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: .5;
      }
      .contenedor3::before {
        position: absolute;
        content: '';
        background-color: black;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: .5;
      }
    
    </style>
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md fixed-top" style="background: rgb(192,0,0);
background: linear-gradient(90deg, rgba(192,0,0,1) 0%, rgba(195,0,0,1) 35%, rgba(255,0,0,1) 100%);">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php" style="color: white;">La Fiesta del Chivo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="personajes.php"  style="color: white;">Personajes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="autor.php" style="color: white;">Autor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="elementos.php" style="color: white;">Cultura Dominicana</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Mario Vargas Llosa - La fiesta del chivo.pdf" style="color: white;">Libro</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
    <a href="autor.php">
        <div class="carousel-item active contenedor" >
            <div class="container">
            <div class="carousel-caption text-start">
                <h1>Mario Vargas Llosa</h1>
                <p>Autor de la fiesta del chivo.</p>
            </div>
            </div>
        </div>
    </a>
    <a href="personajes.php">

        <div class="carousel-item contenedor2">
            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Personajes.</h1>
                    <p>Algunos de los personajes relevantes de la obra</p>
                </div>
            </div>
        </div>
    </a>

        <div class="carousel-item contenedor3">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Estudiantes</h1>
              <p>Estudiantes que expusieron e hicieron capáz el proyecto.</p>
            </div>
          </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

</div>

<script>
  AOS.init();
</script>