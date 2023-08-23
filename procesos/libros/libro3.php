<?php
require "../../php/conexion.php";

$nombre=$_GET['nombre'];
$editorial=$_GET['editorial'];
$autor=$_GET['autor'];
$genero=$_GET['genero'];
$autor_pais=$_GET['autorp'];
$pagina=$_GET['pagina'];
$edicion=$_GET['edicion'];
$precio=$_GET['precio'];
$id=$_GET['id_libro'];
$stock=$_GET['stock'];
$estado=$_GET['estado'];
$F=$_GET['funcion'];


if($F=="A"){
    
    $q="insert into libros(nombrel, editorial, autor, genero, pais_autor, n_pagina, año_edicion, precio_libro, stock, estado) values ('$nombre','$editorial','$autor','$genero', '$autor_pais', '$pagina', '$edicion', '$precio', '$stock', '$estado')";
}
elseif($F=="M"){
    $q="update libros set nombrel='$nombre', editorial='$editorial', autor='$autor', genero='$genero', pais_autor='$autor_pais', n_pagina='$pagina', año_edicion='$edicion', precio_libro='$precio', stock='$stock', estado='$estado' where id_libro=$id";
}
else
{
    $q="delete from libros where id_libro=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:../../index.php");

?>