<?php
session_start();
if(!isset ($_SESSION['usuario'])){
    header("location:p_principal.php");
}
$nomusuario=$_SESSION["usuario"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Biblioteca Municipal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/escudo.png" rel="icon">
  <link href="template/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="template/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="template/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Techie
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header style=" transition: all 0.5s;
  z-index: 997;
 
  background: rgba(24, 6, 185, 0.8);
  padding: 12px 0;" id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Biblioteca Municipal</a><img src="img/escudo.png" alt=""></h1>
  
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Libros</a></li>
          <li><a class="nav-link scrollto" href="#services">Prestamos</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Clientes</a></li>
          <a href="php/cerrar.php" class="btn btn-primary"><button  type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
            cerrar sesion
          </button></a> 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
<!-- <div class="container-fluid" data-aos="fade-up">
      <div class="position-absolute bottom-0 end-0">
        <div style="text-align: left;" class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 class="align-baseline" style="font-size: 150%; color: black;">Biblioteca Municipal</h1>
          <h2 style="color: black;">"Wanda Tatiana De Placido de Galliano"</h2>
          
        </div>
         <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img  src="img/libros.png" class="img-fluid animated" alt="">
        </div> 
      </div>  -->
   
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    <div class="container text-center" data-aos="fade-up" style="border: 1px #000;">
        <div class="row">
        <div class="section-title">
          <h2>Libros</h2>
          
        </div>
          <div class="col">
            
          </div>
        </div>
      </div>
      <br>
      <div>
      <div class="caja3 ">
          
        
        
        <table class="table caja2" border="2px"> 
     </div >
        

        <table class="table table-bordered border-dark table-secondary table-hover" border="2px">
        <thead class="m-1">
      
        <thead>
          <tr>
          <th scope="col">#</th>
      <th scope="col">Nombre del libro</th>
      <th scope="col">Editorial</th>
      <th scope="col">Autor</th>
      <th scope="col">Genero</th>
      <th scope="col">Pais del autor</th>
      <th scope="col">Numero de pagina</th>
      <th scope="col">Año de edicion</th>
      <th scope="col">Precio del libro</th>
      <th scope="col">Stock</th>
      <th scope="col">Estado del libro</th>
          </tr>
        </thead>
        <tbody>
<?php
  require "php/conexion.php";
  $q="select * from libros ";
  $r=mysqli_query($con, $q);
 
  while( $datos=mysqli_fetch_array($r)){
    echo("<tr>");
    echo("<td scope='row'> <a href='procesos/libros/libro2.php?id_libro=".$datos['id_libro']."&funcion=M' ><img src='img/editar.png' alt='' ></a>
  
  <a href='procesos/libros/libro2.php?id_libro=".$datos['id_libro']."&funcion=B'><img src='img/goma-de-borrar.png' alt=''></a>
  
  <td>". $datos['nombrel']."</td><td>".$datos['editorial']."</td><td>".$datos['autor']."</td><td>".$datos['genero']."</td><td>".$datos['pais_autor']."</td><td>".$datos['n_pagina']."</td><td>".$datos['año_edicion']."</td><td>".$datos['precio_libro']."</td><td>".$datos['stock']."</td><td>".$datos['estado']."</td>");
   echo("</tr>");
   


  }
  
  ?>
  </tbody>
  <a href='procesos/libros/libro2.php?id_libro=0&funcion=A' ><img src='img/boton-agregar.png ' class="m-2" height="50px" ></a>
  </table>
</body>
        

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="section-title">
          <h2>Prestamos</h2>
          
        </div>
          <div class="col">
            
          </div>
        </div>
      </div>
      <br>
      <div>
      <div class="caja3 ">
          
        
        
        <table class="table caja2" border="2px"> 
     </div >
        

        <table class="table table-bordered border-dark table-secondary table-hover" border="2px">
        <thead class="m-1">
      
        <thead>
          <tr>
          <th scope="col">#</th>
      <th scope="col">Numero del pedido</th>
      <th scope="col">Nombre del libro</th>
      <th scope="col">Nombre del cliente</th>
      <th scope="col">Fecha de salida</th>
      <th scope="col">Fecha de devolucion</th>
     
          </tr>
        </thead>
        <tbody>
<?php
  require "php/conexion.php";
  $q="select * from prestamos, clientes, libros where prestamos.id_libro=libros.id_libro and prestamos.id_cliente=clientes.id_cliente ";
  $r=mysqli_query($con, $q);
 
  while( $datos=mysqli_fetch_array($r)){
    echo("<tr>");
    echo("<td scope='row'> <a href='procesos/prestamos/prestamo2.php?id_prestamo=".$datos['id_prestamo']."&funcion=M' ><img src='img/editar.png' alt='' ></a>
  
  <a href='procesos/prestamos/prestamo2.php?id_prestamo=".$datos['id_prestamo']."&funcion=B'><img src='img/goma-de-borrar.png' alt=''></a>
  
  <td>".$datos['numero_pedido']."</td><td>".$datos['nombrel']."</td><td>".$datos['nombrec']."</td><td>".$datos['fecha_salida']."</td><td>".$datos['fecha_devolucion']."</td>");
   echo("</tr>");
   


  }
  
  ?>
  </tbody>
  <a href='procesos/prestamos/prestamo2.php?id_prestamo=0&funcion=A' ><img src='img/boton-agregar.png ' class="m-2" height="50px" ></a>
  </table>
</body>

      </div>
    </section>

      </div>
    </section><!-- End Services Section -->

    <!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        

      </div>
    </section><!-- End Counts Section -->

   

    

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="section-title">
          <h2>Clientes</h2>
          
        </div>
          <div class="col">
            
          </div>
        </div>
      </div>
      <br>
      <div>
      <div class="caja3 ">
          
        
        
        <table class="table caja2" border="2px"> 
     </div >
        

        <table class="table table-bordered border-dark table-secondary table-hover" border="2px">
        <thead class="m-1">
      
        <thead>
          <tr>
          <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">DNI</th>
      <th scope="col">Domicilio</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Provincia</th>
      <th scope="col">Fecha de Nacimiento</th>
          </tr>
        </thead>
        <tbody>
<?php
  require "php/conexion.php";
  $q="select * from clientes ";
  $r=mysqli_query($con, $q);
 
  while( $datos=mysqli_fetch_array($r)){
    echo("<tr>");
    echo("<td scope='row'> <a href='procesos/clientes/cliente2.php?id_cliente=".$datos['id_cliente']."&funcion=M' ><img src='img/editar.png' alt='' ></a>
  
  <a href='procesos/clientes/cliente2.php?id_cliente=".$datos['id_cliente']."&funcion=B'><img src='img/goma-de-borrar.png' alt=''></a>
  
  <td>".$datos['nombrec']."</td><td>".$datos['apellido']."</td><td>".$datos['DNI']."</td><td>".$datos['domicilio']."</td><td>".$datos['poblacion']."</td><td>".$datos['provincia']."</td><td>".$datos['fecha_nac']."</td>");
   echo("</tr>");
   


  }
  
  ?>
  </tbody>
  <a href='procesos/clientes/cliente2.php?id_cliente=0&funcion=A' ><img src='img/boton-agregar.png ' class="m-2" height="50px" ></a>
  </table>
</body>
      </div>
    </section><!-- End Portfolio Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        

      </div>
    </section><!-- End Counts Section -->

      <!-- ======= Contact Section ======= 
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contactos</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3299.9387540916177!2d-60.73464442507417!3d-34.199041236238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b85719ee46bbc9%3A0xc4e5568583898cf0!2sBiblioteca%20municipal%20Wanda%20de%20Placio!5e0!3m2!1ses!2sar!4v1692192909754!5m2!1ses!2sar" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">enviar mensaje</button></div>
            </form>
          </div>

        </div>

      </div>
    </section> End Contact Section 
 -->

  
   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Biblioteca Municipal</h3>
           
      
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="template/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="template/assets/vendor/aos/aos.js"></script>
  <script src="template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="template/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="template/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="template/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="template/assets/js/main.js"></script>

</body>

</html>