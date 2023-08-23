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
$id = $_GET['id_prestamo'];
$F=$_GET['funcion'];
 
if ($F !="A"){
    // modificar y borrar
    $q="select * from prestamos where id_prestamo=$id";

    $r=mysqli_query($con, $q);
    while($datos=mysqli_fetch_array($r)){
    ?>
    <?php
    echo ( "<center>");
    echo(" <form action='prestamo3.php' method='GET'>");
    
    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>id prestamo</span>
    <input type='text' class='form-control' name='id_prestamo'readonly aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['id_prestamo'].">
  </div>  ");  
   
    
    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>pedido</span>
    <input type='number' class='form-control' name='pedido' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['numero_pedido'].">
  </div>  "); 
     
    
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>id libro</span>
     <input type='number' class='form-control' name='id_libro' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['id_libro'].">
   </div>  "); 
     
     
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>id cliente</span>
     <input type='number' class='form-control' name='id_cliente' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['id_cliente'].">
   </div>  "); 
     
     
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>fecha de salida</span>
     <input type='date' class='form-control' name='salida' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['fecha_salida'].">
   </div>  "); 

   echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>fecha de devolucion</span>
     <input type='date' class='form-control' name='devolucion' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['fecha_devolucion'].">
   </div>  "); 
    
        
         
           
           echo("<input type='text' name='funcion' value=".$F.">");
           echo(  "<br>");
           echo( "<input type='submit'  class='btn btn-primary'value='modificar'>");
           
    echo ("</form>");
    }
}
else{ 
    echo ( "<center>");
    echo(" <form action='prestamo3.php' method='GET'>");
        
    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>id prestamo</span>
    <input type='text' class='form-control' name='id_prestamo'  aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
  </div>  ");  
   
    
    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>pedido</span>
    <input type='number' class='form-control' name='pedido' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
  </div>  "); 
     
    
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>id libro</span>
     <input type='number' class='form-control' name='id_libro' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
   </div>  "); 
     
     
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>id cliente</span>
     <input type='number' class='form-control' name='genero' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
   </div>  "); 
     
     
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>fecha de salida</span>
     <input type='date' class='form-control' name='salida' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
   </div>  "); 

   echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>fecha de devolucion</span>
     <input type='date' class='form-control' name='devolucion' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
   </div>  "); 
      echo("<input type='text' name='funcion' value=".$F.">");
      echo(  "<br>");
      echo( "<input type='submit'class='btn btn-primary' value='agregar'>");
      
echo ("</form>");



}