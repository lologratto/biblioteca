<?php
$ids=$_GET['namesocio'];
$a =$_GET['año'];
require '../../php/conexion.php';
$q = "select * from cuotas where id_cliente = $ids and año=$a";
//$q= "select * from cuotas";
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