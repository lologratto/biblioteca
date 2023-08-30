$( document ).ready(function() {
    $('#todos').click(function(){
          mostrardatos()
    })
    $('#descripcion').keyup(function(){
        mostrardatos2()
    })
});

 
function mostrardatos(){
$('#tabla').empty()
var ids = $('#todos').val();
var a = $('#año').val();
var estadopago;
var lineaimagen;
$.ajax({
    url: "php/buscarphp.php",
    type: "GET",
    data: {"q":'select * from libros order by nombrel'},
    dataType: "json",
    success: function (respuesta){
        
        $.each(respuesta, function (key, value){
            if(value.estado=='S'){
                
            }
            else{
                
            }
            $('#tabla').append("<tr>"+ 
            "<td>"+ value.id_libro+ "</td>"+
                 "<td>"+ value.nombrel+"</td>"+ 
                 "<td>"+ value.id_editorial+"</td>"+
                 "<td>"+ value.id_autor+"</td>"+
                 "<td>"+ value.genero+"</td>"+
                 "<td>"+ value.id_pais+"</td>"+
                 "<td>"+ value.n_pagina+"</td>"+
                 "<td>"+ value.año_edicion+"</td>"+
                 "<td>"+ value.precio_libro+"</td>"+
                 "<td>"+ value.estado+"</td>"+
                 "<td>"+ value.cant_disponible+"</td>"+
                 "<td>"+ value.cant_lib_prestado+"</td>"+
                 "<td>"+ value.idioma+"</td>"+
            "</tr>")
        })
        }
    })
}
 
function mostrardatos2(){
    $('#tabla').empty()
    var ids = $('#todos').val();
    var a = $('#año').val();
    var estadopago;
    var lineaimagen;
    $.ajax({
        url: "php/buscarphp.php",
        type: "GET",
        data: {"q":"select * from libros where upper(nombrel) like'%"+$('#descripcion').val().toUpperCase()+"%'"},
        dataType: "json",
        success: function (respuesta){
            
            $.each(respuesta, function (key, value){
                if(value.estado=='S'){
                    
                }
                else{
                    
                }
                $('#tabla').append("<tr>"+ 
                "<td>"+ value.id_libro+ "</td>"+
                 "<td>"+ value.nombrel+"</td>"+ 
                 "<td>"+ value.id_editorial+"</td>"+
                 "<td>"+ value.id_autor+"</td>"+
                 "<td>"+ value.genero+"</td>"+
                 "<td>"+ value.id_pais+"</td>"+
                 "<td>"+ value.n_pagina+"</td>"+
                 "<td>"+ value.año_edicion+"</td>"+
                 "<td>"+ value.precio_libro+"</td>"+
                 "<td>"+ value.estado+"</td>"+
                 "<td>"+ value.cant_disponible+"</td>"+
                 "<td>"+ value.cant_lib_prestado+"</td>"+
                 "<td>"+ value.idioma+"</td>"+
                "</tr>")
            })
            }
        })
    }
     