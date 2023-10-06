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
$id = $_GET['id_cuota'];
$F=$_GET['funcion'];
 
if ($F !="A"){
    // modificar y borrar
    $q="select * from cuotas where id_cuota=$id";

    $r=mysqli_query($con, $q);
    while($datos=mysqli_fetch_array($r)){
    ?>
    <?php
    echo ( "<center>");
    echo(" <form action='cuota3.php' method='GET'>");

    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>id cuota</span>
    <input type='text' class='form-control' name='id_cuota'readonly aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['id_cuota'].">
  </div>  ");  
   
    
    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>Importe</span>
    <input type='number' class='form-control' name='importe' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['importe'].">
  </div>  "); 
     
    
  echo(" <span class='input-group-text' id='inputGroup-sizing-default'>Nombre del Cliente</span>");
  echo("<select  class='form-select' aria-label='Default select example' id='cliente' name='id_cliente'>");
  require "../../php/conexion.php";
  $q="select * from  clientes  order by nombrec";
  $r=mysqli_query($con, $q);
  while($datos2=mysqli_fetch_array($r)){
   echo("<option value=". $datos2['id_cliente'].">". $datos2['nombrec']."</option>");
  }
 
  echo("</select>");
  echo(  "<br>");
 
  echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>Estado</span>
    <input type='text' class='form-control' name='estado' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['estado'].">
  </div>  "); 
     
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>Fecha Pago</span>
     <input type='date' class='form-control' name='pago' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['fecha_pago'].">
   </div>  "); 

   echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>Fecha de Vencimiento</span>
     <input type='date' class='form-control' name='vto' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['fecha_vto'].">
   </div>  "); 
    
   echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>Año</span>
     <input type='text' class='form-control' name='año' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['año'].">
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
    echo(" <form action='cuota3.php' method='GET'>");
        
    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>id cuota</span>
    <input type='text' class='form-control' name='id_cuota'readonly aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
  </div>  ");  
   
    
    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>Importe</span>
    <input type='number' class='form-control' name='importe' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default'>
  </div>  "); 
     
    
  echo(" <span class='input-group-text' id='inputGroup-sizing-default'>Nombre del Cliente</span>");
  echo("<select  class='form-select' aria-label='Default select example' id='cliente' name='id_cliente'>");
  require "../../php/conexion.php";
  $q="select * from  clientes  order by nombrec";
  $r=mysqli_query($con, $q);
  while($datos1=mysqli_fetch_array($r)){
   echo("<option value=". $datos1['id_cliente'].">". $datos1['nombrec']."</option>");
  }
 
  echo("</select>");
  echo(  "<br>");
 
  echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>Estado</span>
    <input type='text' class='form-control' name='estado' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
  </div>  "); 
     
     echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>Fecha Pago</span>
     <input type='date' class='form-control' name='pago' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
   </div>  "); 

   echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>Fecha de Vencimiento</span>
     <input type='date' class='form-control' name='vto' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
   </div>  "); 
    
   echo("<div class='input-group mb-3'>
     <span class='input-group-text' id='inputGroup-sizing-default'>Año</span>
     <input type='text' class='form-control' name='año' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
   </div>  "); 
  
  
 echo ( "<center>");
     echo("<input type='text' name='funcion' value=".$F.">");
     echo(  "<br>");
     echo( "<input type='submit' class='btn btn-primary' value='agregar'>");
     
echo ("</form>");



}