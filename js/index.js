/* global alertify */
$(document).ready(function () {
});

function login(){
   
    var user=$("#username").val();
    var pass=$("#password").val();

    var cadena="username="+user+"&password="+pass;
    $.ajax({
        type:"POST",
        url:"controller/loginController.php",
        data:cadena,
        datatype:'json',
        beforeSend:function(xhr){
            $("#ajaxBusy").show();
        },
        success:function(data){
            $("#ajaxBusy").hide();
            if (data==true){
                success_noti("Ingreso Exitoso!");
                $(location).attr('href','content/index.php');
            }else{
                error_noti("Usuario o Contraseña Incorrecta");
                console.log(data);
            }
        },
        error: function(e){
            $("ajaxBusy").hide();
            error_noti("Sistema No Disponible");
            console.log(data);
        }
    });

}
$(document).keypress(function (e) {
    if (e.which == 13) {
        login();
    }
});