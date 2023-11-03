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
$id = $_GET['id_cliente'];
$F=$_GET['funcion'];
 
if ($F !="A"){
    // modificar y borrar
    $q="select * from clientes where id_cliente=$id";

    $r=mysqli_query($con, $q);
    while($datos=mysqli_fetch_array($r)){
    ?>
    <?php
    echo ( "<center>");
    echo(" <form action='cliente3.php' method='GET'>");
    echo("<h1>Clientes</h1>");
    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>id cliente</span>
    <input type='text' class='form-control' name='id_cliente'readonly aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['id_cliente'].">
  </div>  ");  
   
    
    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>nombre</span>
    <input type='text' class='form-control' name='nombre' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['nombrec'].">
  </div>  "); 
     
    
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>apellido</span>
     <input type='text' class='form-control' name='apellido' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['apellido'].">
   </div>  "); 
     
     
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>DNI</span>
     <input type='number' class='form-control' name='DNI' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['DNI'].">
   </div>  "); 
     
     
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>domicilio</span>
     <input type='text' class='form-control' name='domicilio' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value='".$datos['domicilio']."'>
   </div>  "); 

   echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>ciudad</span>
     <input type='tex' class='form-control' name='poblacion' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['poblacion'].">
   </div>  "); 
    
   echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>provincia</span>
     <input type='tex' class='form-control' name='provincia' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value='".$datos['provincia']."'>
   </div>  "); 
         
   echo("<div class='input-group mb-3'>
   <span class='input-group-text' id='inputGroup-sizing-default'>fecha de nacimiento</span>
   <input type='date' class='form-control' name='nacimiento' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['fecha_nac'].">
 </div>  "); 
          
 echo("<div class='input-group mb-3'>
 <span class='input-group-text' id='inputGroup-sizing-default'>Estado</span>
 <input type='text' class='form-control' name='data' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['estadoc']." >
</div>  "); 


           echo("<input type='text' name='funcion' value=".$F.">");
           echo(  "<br>");
           echo( "<input type='submit' class='btn btn-primary' value='modificar'>");
           
    echo ("</form>");
    echo ( "</center>");
    }
}
else{ 
    echo ( "<center>");
    echo(" <form action='cliente3.php' method='GET'>");
    echo("<h1>Clientes</h1>");
    echo("<div class='input-group mb-3'>
   
    <input type='hidden' class='form-control' name='id_cliente' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
  </div>  ");  
   
    
    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>nombre</span>
    <input type='text' class='form-control' name='nombre' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
  </div>  "); 
     
    
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>apellido</span>
     <input type='text' class='form-control' name='apellido' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
   </div>  "); 
     
     
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>DNI</span>
     <input type='number' class='form-control' name='DNI' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
   </div>  "); 
     
     
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>domicilio</span>
     <input type='text' class='form-control' name='domicilio' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
   </div>  "); 

   echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>ciudad</span>
     <input type='tex' class='form-control' name='poblacion' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
   </div>  "); 
    
   echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>provincia</span>
     <input type='tex' class='form-control' name='provincia' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
   </div>  ");  
         
   echo("<div class='input-group mb-3'>
   <span class='input-group-text' id='inputGroup-sizing-default'>fecha de nacimiento</span>
   <input type='date' class='form-control' name='nacimiento' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
 </div>  "); 

 echo("<div class='input-group mb-3'>
 <span class='input-group-text' id='inputGroup-sizing-default'>Estado</span>
 <input type='text' class='form-control' name='data' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value='A' >
</div>  "); 

 echo ( "</center>");
 echo ( "<center>");
     echo("<input type='text' name='funcion' value=".$F.">");
     
     echo(  "<br>");
     echo( "<input type='submit' class='btn btn-primary' value='agregar'>");
     echo("</center>");
echo ("</form>");



}
require '../../php/pie.php';