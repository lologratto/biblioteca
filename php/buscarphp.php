<?php

require 'conexion.php';
$q =$_GET['q'];
$q= "select * from libros,editoriales,autores,paisautor where libros.id_editorial=editoriales.id_editorial and libros.id_autor=autores.id_autor and libros.id_pais=paisautor.id_pais";
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