<?php 
$raiz = "../../";
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Home - Append Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../templete/assets/img/favicon.png" rel="icon">
  <link href="../../templete/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../templete/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../../templete/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../templete/assets/css/main.css" rel="stylesheet">

  
</head>
<?php

require "../../php/cabecera2.php";

?>

<div class="container text-center" style="border: 1px #000;">
        <div class="row">
          <div class="col-10">
           <h1 >Procesar Pago   </h1>
           
       
            
          </tr>
          

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="jquery-3.7.0.min.js"></script>
    
</head>
<body>
   
    <div class="container">
    <form>
        <div class="mb-3">
          <label for="socio" class="form-label">socio</label>
          <input  type="number" name="namesocio" class="form-control" value="1" min="1" max="1000" id="socio">
          
        </div>
        <div class="mb-3">
          <label for="año" class="form-label">año</label>
          <input type="number" name="año" class="form-control" value="2023" max="2025" id="año">
        </div>
       
        
    </form>

      <table class="table">
        <thead>
          <tr>
            
            <th scope="col">couta</th>
            <th scope="col">mes</th>
            <th scope="col">impoter</th>
            <th scope="col">estado</th>
            <th scope="col">accion</th>
          </tr>
        </thead>
        <tbody id="tabla">
         
        </tbody>
      </table>
      
      
    </div>
     
      <script src="bootstrap.min.js"></script> 
      <script src="pagos.js"></script> 
</body>
</html>
  