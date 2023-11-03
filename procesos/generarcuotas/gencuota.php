<?php 
$raiz = "../../";
?>
<title>Biblioteca Municipal</title>
<link href="../../img/escudo.png" rel="icon">
<link href="../../template/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../template/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../template/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../template/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../template/assets/css/style.css" rel="stylesheet">


  <header style=" transition: all 0.5s;
  z-index: 997;
 
  background: rgba(24, 6, 185, 0.8);
  padding: 12px 0;" id="header" class="header d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Biblioteca Municipal</a><img src="../../img/escudo.png" alt=""></h1>
  
     

      

    </div>
  </header>
<br>
<form action="gencuota2.php" method="GET">
<div class="container">
  <div class="row">
  <div class="col-4">
  <div class="input-group mb-3">   
<label class="input-group-text"  for="">mes desde:</label>
<div class="form-floating">
<input class="form-control" type="number"min="1" max="12" value="1" name="mesDesde">
<label for="floatingInputGroup1">Ingrese el Dato</label>
</div>
</div>
</div>
<div class="col-1"></div>
<div class="col-4">
<div class="input-group mb-3"> 
<label class="input-group-text" for="">mes hasta:</label>
<div class="form-floating">
<input class="form-control" type="number"min="1" max="12" value="12" name="mesHasta">
<label for="floatingInputGroup1">Ingrese el Dato</label>
</div>
</div>
</div>
</div>
<br>
<div class="container">
  <div class="row">
  <div class="col-4">
  <div class="input-group mb-3"> 
  <label class="input-group-text" for="">año:</label>
  <div class="form-floating">
<input class="form-control" type="number"min="2023" max="2050" value="2023" name="año">
<label for="floatingInputGroup1">Ingrese el Dato</label>
</div>
</div>
</div>
<br>
<div class="col-1"></div>
<div class="col-4">
<div class="input-group mb-3"> 
<label class="input-group-text" for="">importe:</label>
<div class="form-floating">
<input class="form-control" type="number"min="500" max="1500" value="500" name="importe">
<label for="floatingInputGroup1">Ingrese el Dato</label>
</div>
</div>
</div>
</div>


<br>
<div class="container">
  <div class="row">
  <div class="col-4">
  <div class="input-group mb-3"> 

 <label class="input-group-text"> Cliente:</label>
     <select name="namesocio" type="text" class="form-control form-select"  id="socio"placeholder="Cliente">
    
    <?php
    require "../../php/conexion.php";
    $q="SELECT * FROM clientes  ORDER by nombrec";
    $r=mysqli_query($con,$q);
    while($valores=mysqli_fetch_array($r)){
    echo('<option value='.$valores['id_cliente'].'>'.$valores['nombrec'].'</option>');
}
    ?>

    </select>
    </div>
</div>
</div>
</div>
</div>
</div>


<div class="col-1"></div>
<div class="col-4">
<div class="input-group mb-3"> 

<div class="form-floating">
<input class="form-control" type="hidden"min="1" max="999" value="999" name="socioHasta">

</div>
</div>
</div>
</div>
<br>
<div class="container">
  <div class="row">
    <div class="col-2"></div>
  <div class="col-2">
<a href="../../index.php"><input type="button" class="btn btn-danger" value="cancelar"></a>
</div>
<div class="col-1"></div>
<div class="col-2">
<input type="submit" class="btn btn-success" value="generar">
</div>
</div>
</div>
</div>
</div>
</div>
</form>


   
</footer>
</body>
</body>
<footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Biblioteca Municipal</h3>
           
      
  </footer>
</html>
   
</footer>