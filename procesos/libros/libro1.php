<link href="../../template/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../template/assets/css/style.css" rel="stylesheet">

<section id="about" class="about">
      <div class="container">
      <div class="section-title">
          <h2>Libros</h2>
          
        </div>
      <table class="table">
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
  </tbody>
</table>
<?php
  require "../../php/conexion.php";
  $q="select * from libros ";
  $r=mysqli_query($con, $q);
 
  while( $datos=mysqli_fetch_array($r)){
    echo("<tr>");
    echo("<td scope='row'> <a href='libro2.php?id_libro=".$datos['id_libro']."&funcion=M' ><img src='../../img/dibujo (1).png' alt='' ></a>
  
  <a href='libro2.php?id_libro=".$datos['id_libro']."&funcion=B'><img src='../../img/goma-de-borrar.png' alt=''></a>
  
  <td>". $datos['nombrel']."</td><td>".$datos['editorial']."</td><td>".$datos['autor']."</td><td>".$datos['genero']."</td><td>".$datos['pais_autor']."</td><td>".$datos['n_pagina']."</td><td>".$datos['año_edicion']."</td><td>".$datos['precio_libro']."</td><td>".$datos['stock']."</td><td>".$datos['estado']."</td>");
   echo("</tr>");
   


  }
  
  ?>
  </tbody>
  <a href='libro2.php?id_libro=0&funcion=A' ><img src='../../img/boton-agregar.png ' class="m-2" height="50px" ></a>
  </table>
</body>
        

      </div>
    </section>

    <script src="../../template/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../template/assets/vendor/aos/aos.js"></script>
  <script src="../../template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../template/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../template/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../template/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../template/assets/js/main.js"></script>