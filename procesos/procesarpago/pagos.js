$( document ).ready(function() {
    $('#socio').change(function(){
          llenartabla()
    })
    
        $('#año').change(function(){
              llenartabla()
        })
        $('#socio').focus(function(){
            llenartabla()
      })
      
          $('#año').focus(function(){
                llenartabla()
          })
});

 
function llenartabla(){
$('#tabla').empty()
var ids = $('#socio').val();
var a = $('#año').val();
var estadopago;
var lineaimagen;
$.ajax({
    url: "procesos/procesarpago/buscardatos.php",
    type: "GET",
    data: {"namesocio":ids, "año":a},
    dataType: "json",
    success: function (respuesta){
        
        $.each(respuesta, function (key, value){
            if(value.estado=='S'){
                estadopago="Sin Pagar"
                lineaimagen="<img src='procesos/procesarpago/dinero.png'  onclick='pagar("+ value.id_cuota + ")'></img>"
                
            }
            else{
                estadopago="Pago"
                lineaimagen="<img src='procesos/procesarpago/exito.png' >"
            }
            $('#tabla').append("<tr>"+ 
            "<td>"+ value.id_cliente+"</td>"+
             "<td>"+ value.id_cuota+"</td>"+ 
             "<td>"+ value.importe+"</td>"+
             "<td>"+ value.estado+"</td>"+
             "<td>"+ value.año+"</td>"+
             
             "<td>"+ value.fecha_vto+"</td>"+
            
             "<td>" + lineaimagen+ "</td>"+
            "</tr>")
        })
        }
    })
}
 function pagar(c){
    var q="update cuotas SET ESTADO='P' where id_cuota="+ c
    $.ajax({
        url: "procesos/procesarpago/pagar.php",
        type: "GET",
        data: {"q":q},
        dataType: "json",
        success: function (respuesta){
            
           if(respuesta=="1"){
            alert("pago realizado")
           }
           else
           {
            alert("error al pago")
           }
           llenartabla()
        }
 })
 }