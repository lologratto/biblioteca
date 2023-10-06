<?php 
$raiz = "../../";
?>
<link href="../../template/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../template/assets/css/style.css" rel="stylesheet">

<form action="gencuota2.php" method="GET">
<div class="container">
  <div class="row">
  <div class="col-4">
<label for="">mes desde:</label>
<input type="number"min="1" max="12" value="1" name="mesDesde">
</div>
<div class="col-1"></div>
<div class="col-4">
<label for="">mes hasta:</label>
<input type="number"min="1" max="12" value="12" name="mesHasta">
</div>
</div>
</div>
<br>
<div class="container">
  <div class="row">
  <div class="col-4">
  <label for="">año:</label>
<input type="number"min="2023" max="2050" value="2023" name="año">
</div>

<br>
<div class="col-1"></div>
<div class="col-4">
<label for="">importe:</label>
<input type="number"min="500" max="1500" value="500" name="importe">
</div>
</div>
</div>


<br>
<div class="container">
  <div class="row">
  <div class="col-4">
<label for="">socio desde:</label>
<input type="number"min="1" max="999" value="1" name="socioDesde">
</div>
<div class="col-1"></div>
<div class="col-4">
<label for="">socio hasta:</label>
<input type="number"min="1" max="999" value="999" name="socioHasta">
</div>
</div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-2"></div>
  <div class="col-2">
<a href="../../principal.php"><input type="button" value="cancelar"></a>
</div>
<div class="col-1"></div>
<div class="col-2">
<input type="submit" value="generar">
</div>
</div>
</div>
</form>


   
</footer>
</body>
</body>
</html>
   
</footer>