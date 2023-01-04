$(document).ready(function(){
});


const datos=()=>{

    let pais=document.getElementById('pais').value;
    let empresa=document.getElementById('empresa').value;
    let unidad=document.getElementById('unidad').value;
    let requerimiento=document.getElementById('requerimiento').value;
    let objetivo=document.getElementById('objetivo').value;
    let tipo=document.getElementById('tipo').value;
    let ubicacion=document.getElementById('ubicacion').value;
    let solicitante=document.getElementById('solicitante').value;
    let fechaSolicitud=document.getElementById('fechaSolicitud').value;
    let fechaEntrega=document.getElementById('fechaEntrega').value;
    let costos=document.getElementById('costos').value;
    let nombreCampana=document.getElementById('nombreCampana').value;
    let target=document.getElementById('target').value;
    let look=document.getElementById('look').value;
    let texto=document.getElementById('texto').value;
    let formato=document.getElementById('formato').value;
    let medidas=document.getElementById('medidas').value;
    let duracion=document.getElementById('duracion').value;
    let responsable=document.getElementById('responsable').value;
    let avance=document.getElementById('avance').value;
    let horas=document.getElementById('horas').value;
    let links=document.getElementById('links').value;
    let archivos=document.getElementById('archivos').value;
    let comentarios=document.getElementById('comentarios').value;

    
    
    var cadena="aux=save&pais="+pais+"&empresa="+empresa+"&unidad="+unidad+"&requerimiento="+requerimiento+"&objetivo="+objetivo+"&tipo="+tipo+"&ubicacion="+ubicacion+"&solicitante="+solicitante+"&fechaSolicitud="+fechaSolicitud+"&fechaEntrega="+fechaEntrega+"&costos="+costos+"&nombreCampana="+nombreCampana+"&target="+target+"&look="+look+"&texto="+texto+"&formato="+formato+"&medidas="+medidas+"&duracion="+duracion+"&responsable="+responsable+"&avance="+avance+"&horas="+horas+"&links="+links+"&archivos="+archivos+"&comentarios="+comentarios;
    document.getElementById('texto').value=cadena;
    console.log(cadena)
    $.ajax({
        type: "POST",
        url: "controller/consultarPedidos.php",
        data: cadena,
        beforeSend:function(xhr){
            $("#ajaxBusy").show();
        },
        success:function(result){
            if (result == true) {
                document.getElementById('pais').value='';
                document.getElementById('empresa').value='';
                document.getElementById('unidad').value='';
                document.getElementById('requerimiento').value='';
                document.getElementById('objetivo').value='';
                document.getElementById('tipo').value='';
                document.getElementById('ubicacion').value='';
                document.getElementById('solicitante').value=result;
                document.getElementById('fechaSolicitud').value='';
                document.getElementById('fechaEntrega').value='';
                document.getElementById('costos').value='';
                document.getElementById('nombreCampana').value='';
                document.getElementById('target').value='';
                document.getElementById('look').value='';
                
                document.getElementById('formato').value='';
                document.getElementById('medidas').value='';
                document.getElementById('duracion').value='';
                document.getElementById('responsable').value='';
                document.getElementById('avance').value='';
                document.getElementById('horas').value='';
                document.getElementById('links').value='';
                document.getElementById('archivos').value='';
                document.getElementById('comentarios').value='';

                success_noti("Pedido Guardado");
           
            } else if (result == false) {
                error_noti("Error al crear el registro/Nombre repetido");
            } else {
                error_noti("Error");
                
            } 
                
            
  
        },
        error: function(e){
            $("ajaxBusy").hide();
            error_noti("Sistema No Disponible");
        }
    });

}