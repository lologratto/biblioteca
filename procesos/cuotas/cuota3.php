<?php
require "../../php/conexion.php";


$id=$_GET['id_cuota'];
$cliente=$_GET['id_cliente'];
$importe=$_GET['importe'];
$estado=$_GET['estado'];
$pago=$_GET['pago'];
$vto=$_GET['vto'];
$año=$_GET['año'];
$F=$_GET['funcion'];


if($F=="A"){
    
    $q="insert into cuotas (importe, id_cliente, estado, fecha_pago, fecha_vto, año) values ('$importe','$cliente','$estado','$pago','$vto','$año')";
}
elseif($F=="M"){
    $q="update cuotas set importe='$importe', id_cliente='$cliente',estado='$estado', fecha_pago='$pago', fecha_vto='$vto', año='$año' where id_cuota=$id";
}
else
{
    $q="delete from cuotas where id_cuota=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:../../index.php");

?>