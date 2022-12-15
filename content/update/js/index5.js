$(document).ready(function(){ 
});

function upload(string){
    let programa = string;
    let file=$("#uploadFile").prop('files')[0];
    var datosForm=new FormData;
    datosForm.append("file",file);
    console.log(programa);

    $.ajax({
        type: "POST",
        dataType: "html",
        processData:false,
        cache: false,
        contentType: false,
        data:datosForm,
        url:'controller/updateController.php',

        beforeSend:function(xhr){
            $("#ajaxBusy").show();
        },
        success:function(data){
            console.log(data);
            uploadfile(programa);
        },
        error: function(e){
            $("ajaxBusy").hide();
            error_noti("Sistema No Disponible");
            console.log(e);
        }
    });
}

function uploadfile(string){
    let programa = string;

    var cadena = "aux=uploadFile&programa="+programa;
    console.log(cadena);

    $.ajax({
        type: "POST",
        data:cadena,
        url:"controller/updateController.php",
        beforeSend:function(xhr){
            $("#ajaxBusy").show();
        },
        success:function(data){
            if(data){
                success_noti("Archivo subido");
                console.log(data)
                //window.location.href="../"+programa+"/index.php";
            }else{
                error_noti("Error al cargar el archivo");
                console.log(data)
            }
        },
        error: function(e){
            $("ajaxBusy").hide();
            error_noti("Sistema No Disponible");
            console.log(e);
        }
    });
}

function regresar(string){
    let programa = string;
    switch (programa){
        case 'upper':
            window.location.href="../upper/index.php";
            break;
        case 'languages':
            window.location.href="../languages/index.php";
            break;
        case 'hey':
            window.location.href="../hey/index.php";
            break;
        default:
            break;
    }
}