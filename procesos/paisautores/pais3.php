<?php
require "../../php/conexion.php";

$nombre=$_GET['nombre'];


$id=$_GET['id_pais'];

$F=$_GET['funcion'];


if($F=="A"){
    
    $q="insert into paisautor( nombrep) values ('$nombre')";
}
elseif($F=="M"){
    $q="update paisautor set nombrep='$nombre' where id_pais=$id";
}
else
{
    $q="delete from paisautor where id_pais=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:../../index.php");

?>