<?php
// Configuración del servidor y la zona horaria
date_default_timezone_set("America/Mexico_City");

// Obtener la fecha y hora actual
$fecha_actual = date("d/m/Y");
$hora_actual = date("H"); // Obtiene la hora en formato 24h

// Mensaje dinámico según la hora del día
if ($hora_actual < 12) {
    $mensaje_bienvenida = "¡Buenos días! Hoy es un gran día para renovar tu estilo.";
} elseif ($hora_actual < 18) {
    $mensaje_bienvenida = "¡Buenas tardes! Explora nuestra colección urbana.";
} else {
    $mensaje_bienvenida = "¡Buenas noches! Encuentra las mejores prendas en MARTINEZZ.";
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Responsive-->
    <title>MARTINEZZ - Ropa Urbana</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- Font Awesome para los íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Primero cargamos los estilos del catálogo -->
    <!--<link rel="stylesheet" href="Hoja de estilo catalogo.Css">-->
    <!-- Luego los estilos principales -->
    <link rel="stylesheet" href="Hoja de estilo1.css">  
  </head>

  <body>
    <h1>MARTINEZZ</h1>
    <!-- Encabezado de la página -->
    <div>
      <nav>
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link fs-5" href="index.php">INICIO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="catalogo.html">CATALOGO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="contacto.html">CONTACTO</a>
          </li>
        </ul>
      </nav>
    </div>
    <br>
    <br>
    <br>

    <!-- Mostrar la fecha actual con PHP -->
    <p class="fecha-actual">Fecha actual: <?php echo $fecha_actual; ?></p>

    <!-- Mensaje dinámico generado con PHP -->
    <p class="mensaje-bienvenida"><?php echo $mensaje_bienvenida; ?></p>

    <!-- Sección del clima -->
    <section class="seccion-clima">
      <h2>Clima Actual</h2>
      <div id="info-clima"></div>
      <div id="sugerencias-clima"></div>
    </section>

    <!-- Sección principal -->
    <section class="seccion-principal">
      <img src="Imagenes de la página/Logo.jpg" alt="Banner de MARTINEZZ" width="460" height="360">

      <h1 class="titulo-seccion">Bienvenido a MARTINEZZ</h1>

      <?php
      echo "<p class='descripcion'>Esta es una tienda de ropa urbana para hombres.</p>";
      $mensaje = "¡Explora nuestros productos y encuentra tu estilo!";
      echo "<p class='mensaje'>$mensaje</p>";
      ?>

      <h2 class="subtitulo">ROPA HOMBRE</h2>
      <p class="descripcion-larga">Nuestra categoría de ropa para hombre combina versatilidad y diseño en cada detalle. Cada prenda refleja nuestra esencia premium, con estilos que van desde lo clásico a lo contemporáneo. Usamos telas de alta calidad como algodón 100%, mezclas con elastano y tejidos técnicos para garantizar comodidad y durabilidad.

      Las siluetas incluyen fits relajados y amplios, así como cortes ajustados que destacan la figura. Exploramos largos y estilos desde básicos esenciales hasta propuestas arriesgadas con detalles gráficos elaborados, estampados únicos bordados y aplicaciones que expresan autenticidad.
      
      Cada prenda se crea con enfoque en materiales, acabados y técnicas que reflejan nuestro compromiso con la calidad. Una colección versátil diseñada para adaptarse a cualquier ocasión y resaltar la individualidad de quienes la eligen.</p>



      <!-- Carrusel de productos -->
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Imagenes de la página/camiseta10.jpg" class="d-block w-100" alt="camiseta">
          </div>
          <div class="carousel-item">
            <img src="Imagenes de la página/pantalón3.jpg" class="d-block w-100" alt="pantalón">
          </div>
          <div class="carousel-item">
            <img src="Imagenes de la página/chaqueta3.jpg" class="d-block w-100" alt="chaqueta">
          </div>
          <div class="carousel-item">
            <img src="Imagenes de la página/gorra4.jpg" class="d-block w-100 " alt="chaqueta">
          </div>
          <div class="carousel-item">
            <img src="Imagenes de la página/Pantalón10.jpg" class="d-block w-100" alt="chaqueta">
          </div>
          <div class="carousel-item">
            <img src="Imagenes de la página/camiseta5.jpg" class="d-block w-100" alt="chaqueta">
          </div>
          <div class="carousel-item">
            <img src="Imagenes de la página/gorra1.jpg" class="d-block w-100" alt="chaqueta">
          </div>
          <div class="carousel-item">
            <img src="Imagenes de la página/chaqueta8.jpg" class="d-block w-100" alt="chaqueta">
          </div>
          <div class="carousel-item">
            <img src="Imagenes de la página/pantalón12.jpg" class="d-block w-100" alt="chaqueta">
          </div>
          <div class="carousel-item">
            <img src="Imagenes de la página/camiseta7.jpg" class="d-block w-100" alt="chaqueta">
          </div>
          <div class="carousel-item">
            <img src="Imagenes de la página/gorra4.jpg" class="d-block w-100" alt="chaqueta">
          </div>
          <div class="carousel-item">
            <img src="Imagenes de la página/pantalón6.jpg" class="d-block w-100" alt="chaqueta">
          </div>
          <div class="carousel-item">
            <img src="Imagenes de la página/chaqueta4.jpg" class="d-block w-100" alt="chaqueta">
          </div>
          <div class="carousel-item">
            <img src="Imagenes de la página/gorra1.jpg" class="d-block w-100" alt="chaqueta">
          </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>

      <!-- Video de presentación -->
      <video width="760" height="760" controls autoplay loop muted>
          <source src="Video1.mp4" type="video/mp4">
      </video>
    </section>
    <br>


    <!-- Pie de página dinámico -->
    <footer>
      <p>&copy; <?php echo date("Y"); ?> MARTINEZZ. Todos los derechos reservados.</p>
    </footer>

    <script src="JavaScript-Archivo.js"></script>
    <script src="clima.js"></script>
    <script src="boton-subir.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    
    <!-- Botón para volver arriba -->
    <button class="boton-subir" id="botonSubir" aria-label="Volver arriba">
      <i class="fas fa-arrow-up"></i>
    </button>
  </body>
</html>