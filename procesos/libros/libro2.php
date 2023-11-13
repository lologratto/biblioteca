<title>Biblioteca Municipal</title>
<link href="../../img/escudo.png" rel="icon">
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
require '../../php/cabecera3.php';
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
echo("<h1>Libros</h1>");

   echo("<div class='input-group mb-3'>
  <span class='input-group-text' id='inputGroup-sizing-default'>id libro</span>
  <input type='text' class='form-control' name='id_libro' readonly aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['id_libro'].">
</div>  ");   
        
          
          echo("<div class='input-group mb-3'>
          <span class='input-group-text' id='inputGroup-sizing-default'>nombre del libro</span>
          <input type='text' class='form-control' name='nombre'  aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['nombrel'].">
        </div>  ");  

        
        echo(" <span class='input-group-text' id='inputGroup-sizing-default'>Editorial</span>");
        
        echo("<select class='form-select' aria-label='Default select example' id='editorial' name='editorial'>");
           require "../../php/conexion.php";
           $q="select * from  editoriales order by nombree";
           $r=mysqli_query($con, $q);
           while($datos2=mysqli_fetch_array($r)){
            if($datos2['id_editorial']==$datos['id_editorial']) {
            echo("<option selected value=". $datos2['id_editorial'].">". $datos2['nombree']."</option>");
           }else{
            echo("<option  value=". $datos2['id_editorial'].">". $datos2['nombree']."</option>");
          
           }
          }
          
           echo("</select>"); 
           echo("<br>");
          
echo(" <span class='input-group-text' id='inputGroup-sizing-default'>Autor</span>");
           echo("<select class='form-select' aria-label='Default select example' id='autor' name='autor'>");
           require "../../php/conexion.php";
           $q="select * from  autores order by nombrea";
           $r=mysqli_query($con, $q);
           while($datos3=mysqli_fetch_array($r)){
            if($datos3['id_autor']==$datos['id_autor']) {
            echo("<option selected value=". $datos3['id_autor'].">". $datos3['nombrea']."</option>");
           }else{
            echo("<option  value=". $datos3['id_autor'].">". $datos3['nombrea']."</option>");
          
           }
          }
          
           echo("</select>");
           
          
           echo("<br>");
           
           
           echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>genero</span>
           <input type='text' class='form-control' name='genero' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['genero'].">
         </div>  "); 
         
         echo(" <span class='input-group-text' id='inputGroup-sizing-default'>Pais del Autor</span>");
         echo("<select class='form-select' aria-label='Default select example' id='autorp' name='autorp'>");
         require "../../php/conexion.php";
         $q="select * from  paisautor order by nombrep";
         $r=mysqli_query($con, $q);
         while($datos4=mysqli_fetch_array($r)){
          if($datos4['id_pais']==$datos['id_pais']) {
          echo("<option selected value=". $datos4['id_pais'].">". $datos4['nombrep']."</option>");
         }else{
          echo("<option value=". $datos4['id_pais'].">". $datos4['nombrep']."</option>");
        
         }
        }
        
         echo("</select>");
           
         echo("<br>");
          
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
           <span class='input-group-text' id='inputGroup-sizing-default'>cantidad disponible</span>
           <input type='number' class='form-control' name='stock' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['cant_disponible'].">
         </div>  "); 
           
          
           echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>estado del libro</span>
           <input type='text' class='form-control' name='estado' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['estado'].">
         </div>  "); 

         echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>cantidad de libros prestado</span>
           <input type='number' class='form-control' name='cant_lib' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['cant_lib_prestado'].">
         </div>  "); 

         echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>idioma</span>
           <input type='text' class='form-control' name='idioma' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['idioma'].">
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
    echo("<h1>Libros</h1>");
    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>id libro</span>
    <input type='text' class='form-control' name='id_libro' readonly aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
  </div>  ");   
          
            
            echo("<div class='input-group mb-3'>
            <span class='input-group-text' id='inputGroup-sizing-default'>nombre del libro</span>
            <input type='text' class='form-control' name='nombre'  aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
          </div>  ");  
           
            
            
            
         
          echo(" <span class='input-group-text' id='inputGroup-sizing-default'>Editorial</span>");
          echo("<select  class='form-select' aria-label='Default select example' id='editorial' name='editorial'>");
          require "../../php/conexion.php";
          $q="select * from  editoriales  order by nombree";
          $r=mysqli_query($con, $q);
          while($datos5=mysqli_fetch_array($r)){
           echo("<option value=". $datos5['id_editorial'].">". $datos5['nombree']."</option>");
          }
         
          echo("</select>"); 
            
          echo("<br>");
          echo(" <span class='input-group-text' id='inputGroup-sizing-default'>Autor</span>");
           echo("<select class='form-select' aria-label='Default select example' id='autor' name='autor'>");
           require "../../php/conexion.php";
           $q="select * from  autores order by nombrea";
           $r=mysqli_query($con, $q);
           while($datos6=mysqli_fetch_array($r)){
            echo("<option value=". $datos6['id_autor'].">". $datos6['nombrea']."</option>");
           }
          
           echo("</select>");
             
           echo("<br>");
             
             echo("<div class='input-group mb-3'>
             <span class='input-group-text' id='inputGroup-sizing-default'>genero</span>
             <input type='text' class='form-control' name='genero' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
           </div>  "); 
           echo(" <span class='input-group-text' id='inputGroup-sizing-default'>Pais del Autor</span>");
           echo("<select class='form-select' aria-label='Default select example' id='autorp' name='autorp'>");
         require "../../php/conexion.php";
         $q="select * from  paisautor order by nombrep";
         $r=mysqli_query($con, $q);
         while($datos7=mysqli_fetch_array($r)){
          echo("<option value=". $datos7['id_pais'].">". $datos7['nombrep']."</option>");
         }
        
         echo("</select>");
         echo("<br>");
             
            
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
           <span class='input-group-text' id='inputGroup-sizing-default'>cantidad de libros</span>
           <input type='number' class='form-control' name='stock' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
         </div>  "); 
            
             echo("<div class='input-group mb-3'>
             <span class='input-group-text' id='inputGroup-sizing-default'>estado del libro</span>
             <input type='text' class='form-control' name='estado' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
           </div>  "); 

           echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>cantidad de libros prestado</span>
           <input type='number' class='form-control' name='cant_lib' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
         </div>  "); 

         echo("<div class='input-group mb-3'>
           <span class='input-group-text' id='inputGroup-sizing-default'>idioma</span>
           <input type='text' class='form-control' name='idioma' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
         </div>  "); 

     echo("<input type='text' name='funcion' value=".$F.">");
     echo(  "<br>");
     echo( "<input type='submit' class='btn btn-primary' value='agregar'>");
echo ("</form>");


}

require '../../php/pie.php';