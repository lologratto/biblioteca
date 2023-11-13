<?php

require 'conexion.php';
$q =$_GET['q'];
//$q= "select * from libros";
$r=mysqli_query($con,$q);
$array=[];
if($r){
   
while($valores=mysqli_fetch_assoc($r)){
    $array[]=$valores;
}
echo json_encode($array);
}
mysqli_close($con);
?>