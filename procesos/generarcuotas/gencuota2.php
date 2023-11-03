<?php
require "../../php/conexion.php";
$mesd= $_GET ['mesDesde'];
$mesh= $_GET ['mesHasta'];
$año= $_GET ['año'];
$sociod= $_GET ['namesocio'];
$socioh= $_GET ['socioHasta'];
$imp= $_GET ['importe'];


for($i=intval($sociod); $i <= intval($socioh); $i++){
$q="select * from clientes where id_cliente = $i and estadoc = 'A'";
$r = mysqli_query($con, $q);
if($r){
    if(mysqli_num_rows($r)>0){
        //empieza cuota
        for($j= intval($mesd); $j <= intval($mesh); $j++){
            $fv="$año/$j/10";
            $q="insert into cuotas (importe,id_cliente,estado,mes,año,fecha_pago,fecha_vto) values($imp,$i,'S',$j,$año,'$fv','$fv')" ;
    echo($q);
            $r=mysqli_query($con, $q);
        }
       //termina cuota
    }
}
header("location:../../index.php");

}
?>