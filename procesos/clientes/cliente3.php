<?php
require "../../php/conexion.php";

$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$dni=$_GET['DNI'];
$dom=$_GET['domicilio'];
$pob=$_GET['poblacion'];
$prov=$_GET['provincia'];
$id=$_GET['id_cliente'];
$nac=$_GET['nacimiento'];
$F=$_GET['funcion'];


if($F=="A"){
    
    $q="insert into clientes ( nombrec, apellido, DNI, domicilio, poblacion, provincia, fecha_nac) values ('$nombre','$cliente','$dni','$dom', '$pob', '$prov', '$nac')";
}
elseif($F=="M"){
    $q="update clientes set nombrec='$nombre', apellido='$apellido', DNI='$dni', domicilio='$dom', poblacion='$pob', provincia='$prov', fecha_nac='$nac' where id_cliente=$id";
}
else
{
    $q="delete from clientes where id_cliente=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:../../index.php");

?>