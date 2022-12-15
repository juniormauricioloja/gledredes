<?php
session_start();
$so = php_uname();
$windows = stripos($so, "Windows");
$path_so = "../../cabecera.php";

$programa = $_SESSION['programa'];

#if ($windows !== false) {
#  $path_so = "C:/xampp/htdocs/gled/cabecera.php";
#} else {
#   $path_so = "/var/www/html/gled/cabecera.php";
#}
?>
<!doctype html>
<html lang="es">

<html>

<head>
    <meta charset="UTF-8">

    <!-------------- Eliminar Cache---------------------------------->
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <!--------------------------------------------------------------->

    <title>Contenido Redes Gled</title>

    <?php require_once "scripts.php"; ?>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <link href="/static/stylesheets/Chart.min.css" rel="stylesheet">
    <link href="/static/stylesheets/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
    <script src="js/index8.js" type="text/javascript"></script>
</head>

<body>
    <div id='ajaxBusy'></div>
    <div class="wrapper">
        <main class="page-content">
            <?php require_once $path_so; ?>
            <br>
            <br>
            <div class=" justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

                <div class="form-new-lead">

                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h2 class="h4">Actualizar datos <?php echo $programa ?></h2>
                        <div class="btn-toolbar mb-2 mb-md-0">
                            <!-- <button class="btn btn-md btn-outline-info mr-2"  onclick="mensaje()">Enviar <span><i class="bi bi-whatsapp"></i></span></button> -->
                            <button class="btn btn-md btn-outline-info mr-2" onclick="regresar('<?php echo $programa ?>');">Regresar</button>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-16">
                            <div class="card">
                                <div class="card-body">

                                    <h4><b>Subir Archivo</b> </h4>



                                    <div class="row">

                                        <div class="form-row mb-3">
                                            <div class="col">
                                                <label for="" class="form-control-label">Archivo:</label>
                                                <input type="file" name="file" id="uploadFile" class="form-control" />
                                            </div>
                                        </div>

                                        

                                        <div class="btn-toolbar mb-2 mb-md-0 justify-content-center">
                                            <button class="btn btn-primary" onclick="upload('<?php echo $programa ?>');"><i class="bi bi-upload pr-3"></i>Subir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>





            <!-- MODAL NOTES -->


            <div id="modalFormulario" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">


                        </div>
                        <div class="modal-body">
                            <div class="card">
                                <div class="card-body">
                                    <!-- FORM TO ADD TASKS -->
                                    <form id="formTask ">
                                        <div class="form-group ">
                                            <h2>La Información ha sido guardada exitosamente!</h2>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-primary " onclick="cerrar();"> Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </main>

        <!--end page main-->
        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--start switcher-->
    </div>
    <!--end wrapper-->
</body>

</html>