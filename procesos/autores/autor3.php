<?php
require "../../php/conexion.php";

$nombre=$_GET['nombre'];


$id=$_GET['id_autor'];

$F=$_GET['funcion'];


if($F=="A"){
    
    $q="insert into autores ( nombrea) values ('$nombre')";
}
elseif($F=="M"){
    $q="update autores set nombrea='$nombre' where id_autor=$id";
}
else
{
    $q="delete from autores where id_autor=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:../../index.php");

?>