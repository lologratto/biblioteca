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
$cant=$_GET['cant_lib'];
$idioma=$_GET['idioma'];


if($F=="A"){
    
    $q="insert into libros(nombrel, id_editorial, id_autor, genero, id_pais, n_pagina, año_edicion, precio_libro, cant_disponible, estado, cant_lib_prestado, idioma) values ('$nombre','$editorial','$autor','$genero', '$autor_pais', '$pagina', '$edicion', '$precio', '$stock', '$estado', '$cant', '$idioma')";
}
elseif($F=="M"){
    $q="update libros set nombrel='$nombre', id_editorial='$editorial', id_autor='$autor', genero='$genero', id_pais='$autor_pais', n_pagina='$pagina', año_edicion='$edicion', precio_libro='$precio', cant_disponible='$stock', estado='$estado', cant_lib_prestado='$cant', idioma='$idioma' where id_libro=$id";
}
else
{
    $q="delete from libros where id_libro=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:../../index.php");

?>