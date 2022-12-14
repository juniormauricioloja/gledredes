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
        contentType:false,
        processData:false,
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
        url:"controller/update2Controller.php",
        beforeSend:function(xhr){
            $("#ajaxBusy").show();
        },
        success:function(data){
            if(data){
                success_noti("Archivo subido");
                console.log(data)
                window.location.href="../"+programa+"/index.php";
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
        case 'educa':
            window.location.href="../educa/index.php";
            break;
        case 'letstalk':
            window.location.href="../letstalk/index.php";
            break;
        case 'enrollu':
            window.location.href="../enrollu/index.php";
            break;
        case 'gled':
            window.location.href="../gled/index.php";
            break;
        case 'kaplan':
            window.location.href="../kaplan/index.php";
            break;
        default:
            break;
    }
}