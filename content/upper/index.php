<?php
session_start();
$so = php_uname();
$windows = stripos($so, "Windows");
$path_so = "../../cabecera.php";
#if ($windows !== false) {
#  $path_so = "C:/xampp/htdocs/gled/cabecera.php";
#} else {
#   $path_so = "/var/www/html/gled/cabecera.php";
#}
$perfil = $_SESSION['perfil'];
$_SESSION['programa'] = 'upper';
switch ($perfil) {
    case 'usermx':
        $stringPais = 'México';
        break;
    case 'userch':
        $stringPais = 'Chile';
        break;
    case 'userec':
        $stringPais = 'Ecuador';
        break;
    default:
        $stringPais = '';
        break;
}
?>
<!doctype html>
<html lang="es">

<html>

<head>
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
    <title>Upper | GLED</title>

    <?php require_once "scripts.php"; ?>

    <script src="js/index.js" type="text/javascript"></script>

</head>

<body>
    <div id='ajaxBusy'></div>
    <div class="wrapper">
        <div class="viewlead">
            <main class="page-content">
                <?php require_once $path_so; ?>
                <br>
                <br>

                <div class="d-flex  justify-content-between align-items-center pt-3 pb-2 ">

                    <div class="mr-auto p-2">
                        <h2 class="h4">Contenido Redes Upper <?php echo $stringPais; ?></h2>
                    </div>

                    <div class="d-flex">
                        <div class="btn-toolbar p-2">
                            <a class="btn btn-sm btn-outline-info" role="button" href="downloadupper.php">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z" />
                                    </svg></span>
                                        

                            </a>
                        </div>
                        <div class="btn-toolbar p-2">
                            <?php
                            if ($perfil == 'superadmin') {
                            ?>
                                <a class="btn btn btn-sm btn-outline-primary" role="button" href="/mkt/index.php" target="_blank">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                                        </svg></span>
                                    

                                </a>
                            <?php
                            } else {
                            ?>
                                <a class="btn btn btn-sm btn-outline-primary" role="button" href="../update/index.php">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                                        </svg></span>
                                    Actualizar Datos
                                </a>


                            <?php
                            }
                            ?>
                        </div>
                    </div>


                </div>

                <?php
                if ($perfil == 'superadmin') {
                ?>
                    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <button type="button" onclick="consulta('superadminmx');" class="btn btn-secondary">MEXICO</button>
                            <button type="button" onclick="consulta('superadminch');" class="btn btn-secondary">CHILE</button>
                            <button type="button" onclick="consulta('superadminec');" class="btn btn-secondary">ECUADOR</button>
                            <button type="button" onclick="consulta('superadminltm');" class="btn btn-secondary">LATAM</button>
                        </div>
                    </div>
                <?php
                }
                ?>

                <div class="col">
                    <label for="" class="form-control-label" hidden>ID:</label>
                    <input id="perfil" type="text" class="form-control from-control-lg" value="<?php echo $perfil; ?>" hidden>
                </div>



                <div class="container-fluid" style="margin-top: 30px;">
                    <div class="row">
                        <div class="table-responsive">
                            <div id="divTableFlujo" class="col-center">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container text-center pt-4">
                    <div><span data-feather="eye-off"></span></div>
                    <p></p>
                </div>
            </main>
        </div>
    </div>




    <div id="updateModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> <i class="bi bi-plus-lg"> </i>Cambiar Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div id="comentarios"></div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="infoModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> <i class="bi bi-plus-lg"> </i>Agregar Información Adicional</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="informacion"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="eliminateRed" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> <i class="bi bi-plus-lg"> </i>Eliminar Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <!-- FORM TO ADD TASKS -->
                            <div class="col-center">
                                <img src="../../img/danger2.png" alt="">
                            </div>
                            <h4 class="col-center">Esta seguro que desea eliminar este Registro?</h4>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" onclick="eliminate();" style="width: 100px;">Eliminar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end page main-->
    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <!--start switcher-->
    <!--end wrapper-->
</body>

</html>