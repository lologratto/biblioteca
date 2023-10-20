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
$id = $_GET['id_editorial'];
$F=$_GET['funcion'];
 
if ($F !="A"){
    // modificar y borrar
    $q="select * from editoriales where id_editorial=$id";

    $r=mysqli_query($con, $q);
    while($datos=mysqli_fetch_array($r)){
    ?>
    <?php
    echo ( "<center>");
    echo(" <form action='edito3.php' method='GET'>");

    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>id editorial</span>
    <input type='text' class='form-control' name='id_editorial'readonly aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['id_editorial'].">
  </div>  ");  
   
    
    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>nombre de la editorial</span>
    <input type='text' class='form-control' name='nombre' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' value=".$datos['nombree'].">
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
    echo(" <form action='edito3.php' method='GET'>");

    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>id editorial</span>
    <input type='text' class='form-control' name='id_editorial'readonly aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
  </div>  ");  
   
    
    echo("<div class='input-group mb-3'>
    <span class='input-group-text' id='inputGroup-sizing-default'>nombre</span>
    <input type='text' class='form-control' name='nombre' aria-label='Sizing example input' aria-describedby='inputGroup-sizing-default' >
  </div>  "); 
     
    
    
          

           echo("<input type='text' name='funcion' value=".$F.">");
           echo(  "<br>");
           echo( "<input type='submit' class='btn btn-primary' value='Agregar'>");
           
    echo ("</form>");
    echo ( "</center>");



}
require '../../php/pie.php';