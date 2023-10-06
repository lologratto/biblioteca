<?php
require "../../php/conexion.php";

$nombre=$_GET['nombre'];


$id=$_GET['id_editorial'];

$F=$_GET['funcion'];


if($F=="A"){
    
    $q="insert into editoriales ( nombree) values ('$nombre')";
}
elseif($F=="M"){
    $q="update editoriales set nombree='$nombre' where id_editorial=$id";
}
else
{
    $q="delete from editoriales where id_editorial=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:../../index.php");

?>