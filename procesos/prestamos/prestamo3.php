<?php
require "../../php/conexion.php";

$pedido=$_GET['pedido'];
$libro=$_GET['id_libro'];
$cliente=$_GET['id_cliente'];
$salida=$_GET['salida'];
$dev=$_GET['devolucion'];
$id=$_GET['id_prestamo'];
$F=$_GET['funcion'];


if($F=="A"){
    
    $q="insert into prestamos ( numero_pedido, id_libro, id_cliente, fecha_salida, fecha_devolucion) values ('$pedido','$libro','$cliente','$salida', '$dev')";
}
elseif($F=="M"){
    $q="update prestamos set numero_pedido='$pedido', id_libro='$libro', id_cliente='$cliente', fecha_salida='$salida', fecha_devolucion='$dev' where id_prestamo=$id";
}
else
{
    $q="delete from prestamos where id_prestamo=$id";
    
    
}
$r=mysqli_query($con, $q);

header("location:../../index.php");

?>