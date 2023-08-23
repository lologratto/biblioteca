<link href="../../template/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../template/assets/css/style.css" rel="stylesheet">

  <script src="../../template/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../template/assets/vendor/aos/aos.js"></script>
  <script src="../../template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../template/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../template/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../template/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../template/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../template/assets/js/main.js"></script>
<?php
require "../../php/conexion.php";
$id = $_GET['id_libro'];
$F=$_GET['funcion'];
 
if ($F !="A"){
    // modificar y borrar
    $q="select * from libros where id_libro=$id";

    $r=mysqli_query($con, $q);
    while($datos=mysqli_fetch_array($r)){
    ?>
    <?php
    echo ( "<center>");
    echo(" <form action='libro3.php' method='GET'>");


   echo("<div class='input-group mb-3'>
  <span class='input-group-text' id='inputGroup-sizing-default'>id libro</span>
  <input type='text' class='form-control' name='id_libro' readonly aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['id_libro'].">
</div>  ");   
        
          
          echo("<div class='input-group mb-3'>
          <span class='input-group-text' id='inputGroup-sizing-default'>nombre del libro</span>
          <input type='text' class='form-control' name='nombre'  aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['nombrel'].">
        </div>  ");  
         
          
          echo("<div class='input-group mb-3'>
          <span class='input-group-text' id='inputGroup-sizing-default'>editorial</span>
          <input type='text' class='form-control' name='editorial' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['editorial'].">
        </div>  "); 
           
          
           echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>autor</span>
           <input type='text' class='form-control' name='autor' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['autor'].">
         </div>  "); 
           
           
           echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>genero</span>
           <input type='text' class='form-control' name='genero' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['genero'].">
         </div>  "); 
           
           
           echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>pais del autor</span>
           <input type='text' class='form-control' name='autorp' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['pais_autor'].">
         </div>  "); 
          
           echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>numero de pagina</span>
           <input type='number' class='form-control' name='pagina' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['n_pagina'].">
         </div>  "); 
           
          
           echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>año de edicion</span>
           <input type='date' class='form-control' name='edicion' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['año_edicion'].">
         </div>  "); 
           
           
           echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>precio del libro</span>
           <input type='number' class='form-control' name='precio' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['precio_libro'].">
         </div>  "); 
           
           
           echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>stock</span>
           <input type='text' class='form-control' name='stock' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['stock'].">
         </div>  "); 
           
          
           echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>estado del libro</span>
           <input type='text' class='form-control' name='estado' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['estado'].">
         </div>  "); 
           
           
           echo("<input type='text' name='funcion' value=".$F.">");
           echo(  "<br>");
           echo( "<input type='submit' class='btn btn-primary' value='modificar'>");
           
    echo ("</form>");
    }
}
else{ 
    echo ( "<center>");
    echo(" <form action='libro3.php' method='GET'>");

    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>id libro</span>
    <input type='text' class='form-control' name='id_libro' readonly aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
  </div>  ");   
          
            
            echo("<div class='input-group mb-3'>
            <span class='input-group-text' id='inputGroup-sizing-default'>nombre del libro</span>
            <input type='text' class='form-control' name='nombre'  aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
          </div>  ");  
           
            
            echo("<div class='input-group mb-3'>
            <span class='input-group-text' id='inputGroup-sizing-default'>editorial</span>
            <input type='text' class='form-control' name='editorial' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
          </div>  "); 
             
            
             echo("<div class='input-group mb-3'>
             <span class='input-group-text' id='inputGroup-sizing-default'>autor</span>
             <input type='text' class='form-control' name='autor' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
           </div>  "); 
             
             
             echo("<div class='input-group mb-3'>
             <span class='input-group-text' id='inputGroup-sizing-default'>genero</span>
             <input type='text' class='form-control' name='genero' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
           </div>  "); 
             
             
             echo("<div class='input-group mb-3'>
             <span class='input-group-text' id='inputGroup-sizing-default'>pais del autor</span>
             <input type='text' class='form-control' name='autorp' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
           </div>  "); 
            
             echo("<div class='input-group mb-3'>
             <span class='input-group-text' id='inputGroup-sizing-default'>numero de pagina</span>
             <input type='number' class='form-control' name='pagina' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
           </div>  "); 
             
            
             echo("<div class='input-group mb-3'>
             <span class='input-group-text' id='inputGroup-sizing-default'>año de edicion</span>
             <input type='date' class='form-control' name='edicion' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
           </div>  "); 
             
             
             echo("<div class='input-group mb-3'>
             <span class='input-group-text' id='inputGroup-sizing-default'>precio del libro</span>
             <input type='number' class='form-control' name='precio' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
           </div>  "); 
             
             
             echo("<div class='input-group mb-3'>
             <span class='input-group-text' id='inputGroup-sizing-default'>stock</span>
             <input type='text' class='form-control' name='stock' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
           </div>  "); 
             
            
             echo("<div class='input-group mb-3'>
             <span class='input-group-text' id='inputGroup-sizing-default'>estado del libro</span>
             <input type='text' class='form-control' name='estado' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
           </div>  "); 
     echo("<input type='text' name='funcion' value=".$F.">");
     echo(  "<br>");
     echo( "<input type='submit' class='btn btn-primary' value='agregar'>");
echo ("</form>");


}

