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
?>
            <!doctype html>
            <html lang="es">

            <html>
                <head>
                    <meta charset="UTF-8">
                    <title>Añadir Pedido</title>
                  
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
                    <script src="js/addpedidos1.js" type="text/javascript"></script>
                </head>

<body>
    <div id='ajaxBusy'></div>
    <div class="wrapper">
        <main class="page-content">
            <?php require_once $path_so; ?>
            <br>
            <br>
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
               <div class="form-new-lead" >   
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                            <h2 class="h4">Ingresar Pedido</h2>
                            <div class="btn-toolbar mb-2 mb-md-0">
                                <button class="btn btn-md btn-outline-info mr-2"  onclick="datos()"><i class="bi bi-download pr-3"></i>Guardar Pedido</button>
                            
                                <a href="index.php" class="btn btn-md btn-outline-secondary" role="button">
                                    <span data-feather="arrow-left"></span>
                                    Regresar
                                </a>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-16">
                            
                            <div class="card">
                    
                                    <div class="card-body">
                                       
                                        <h4><b>Información General</b> </h4>
                                        <div class="row">
                                            <div class="form-row mb-3">
                                                <div class="col" id="paispr">
                                                    <label for="" class="form-control-label" >Pais </label>
                                                    <select name="" id="pais" class="form-control from-control-lg">
                                                    <option value="">----Seleccione Pais----</option>
                                                       <?php
                                                            include '../../models/conection.php';
                                                            $sqlBuscar = "SELECT * FROM productscountry";
                                                            $query_rol = mysqli_query($conection, $sqlBuscar);
                                                            $result_rol=mysqli_num_rows($query_rol);
                                                            if($result_rol>0)
                                                            {
                                                                while($rol=mysqli_fetch_array($query_rol)){
                                                                    if($rol['id']==1 || $rol['id']==4 || $rol['id']==8 || $rol['id']==18){
                                                                ?>
                                                            <option value="<?php echo $rol['country'] ?>"><?php echo $rol['country'] ?></option>
                                                        <?php
                                                                    }    
                                                            }
                                                            }

                                                        ?>  


                                                    </select>

                                                </div>
                                                <div class="col">
                                                    <label for="" class="form-control-label">Empresa</label>
                                                    <select name="" id="empresa" class="form-control from-control-lg">
                                                        <option value="">----Seleccione la Empresa----</option>
                                                        <?php
                                                            include '../../models/conection.php';
                                                            $sqlBuscar = "SELECT * FROM `business`";
                                                            $query_rol = mysqli_query($conection, $sqlBuscar);
                                                            $result_rol=mysqli_num_rows($query_rol);
                                                            if($result_rol>0)
                                                            {
                                                                while($rol=mysqli_fetch_array($query_rol)){
                                                                    
                                                        ?>
                                                                        <option value="<?php echo $rol['Empresa'] ?>"><?php echo $rol['Empresa'] ?></option>
                                                        <?php
                                                                        
                                                            }
                                                            }?>
                                                        
                                                  
                                                    </select>

                                                </div>

                                                <div class="col">
                                                    <label for="" class="form-control-label">Unidad</label>
                                                    <select name="" id="unidad" class="form-control from-control-lg">
                                                        <option value="">----Seleccione la Unidad----</option>
                                                        <?php
                                                            include '../../models/conection.php';
                                                            $sqlBuscar = "SELECT * FROM `unidad_requ`";
                                                            $query_rol = mysqli_query($conection, $sqlBuscar);
                                                            $result_rol=mysqli_num_rows($query_rol);
                                                            if($result_rol>0)
                                                            {
                                                                while($rol=mysqli_fetch_array($query_rol)){
                                                                    
                                                        ?>
                                                                        <option value="<?php echo $rol['Unidad'] ?>"><?php echo $rol['Unidad'] ?></option>
                                                        <?php
                                                                        
                                                            }
                                                            }?>
                                                        
                                                  
                                                    </select>

                                                </div>


                                            </div>
                                            <div class="form-row mb-3">
                                                <div class="col">
                                                    <label for="" class="form-control-label" >Requerimiento </label>
                                                    <select name="" id="requerimiento" class="form-control from-control-lg">
                                                        <option value="">----Seleccione el Requerimiento----</option>
                                                        <?php
                                                            include '../../models/conection.php';
                                                            $sqlBuscar = "SELECT * FROM `requerimientos`";
                                                            $query_rol = mysqli_query($conection, $sqlBuscar);
                                                            $result_rol=mysqli_num_rows($query_rol);
                                                            if($result_rol>0)
                                                            {
                                                                while($rol=mysqli_fetch_array($query_rol)){
                                                                    
                                                        ?>
                                                                        <option value="<?php echo $rol['Requerimiento'] ?>"><?php echo $rol['Requerimiento'] ?></option>
                                                        <?php
                                                                        
                                                            }
                                                            }?>
                                                    </select>
                                                </div>
                                                <div class="form-row mb-3">
                                                    <div class="col">
                                                        <label for="" class="form-control-label">Objetivo</label>
                                                        <select name="" id="objetivo" class="form-control from-control-lg">
                                                            <option value="">----Seleccione el Objetivo----</option>
                                                            <?php
                                                            include '../../models/conection.php';
                                                            $sqlBuscar = "SELECT * FROM `objetivo_requ`";
                                                            $query_rol = mysqli_query($conection, $sqlBuscar);
                                                            $result_rol=mysqli_num_rows($query_rol);
                                                            if($result_rol>0)
                                                            {
                                                                while($rol=mysqli_fetch_array($query_rol)){
                                                                    
                                                        ?>
                                                                        <option value="<?php echo $rol['Objetivo'] ?>"><?php echo $rol['Objetivo'] ?></option>
                                                        <?php
                                                                        
                                                            }
                                                            }?>
                                                        </select>
                                                    </div>

                                                    <div class="col">
                                                        <label for="" class="form-control-label">Tipo</label>
                                                        <select name="" id="tipo" class="form-control from-control-lg">
                                                            <option value="">----Seleccione el Tipo----</option>
                                                            <?php
                                                            include '../../models/conection.php';
                                                            $sqlBuscar = "SELECT * FROM `tipo_requerimiento`";
                                                            $query_rol = mysqli_query($conection, $sqlBuscar);
                                                            $result_rol=mysqli_num_rows($query_rol);
                                                            if($result_rol>0)
                                                            {
                                                                while($rol=mysqli_fetch_array($query_rol)){
                                                                    
                                                        ?>
                                                                        <option value="<?php echo $rol['Tipo'] ?>"><?php echo $rol['Tipo'] ?></option>
                                                        <?php
                                                                        
                                                            }
                                                            }?>
                                                        </select>
                                                    </div>

                                                    <div class="col">
                                                        <label for="" class="form-control-label">Ubicación</label>
                                                        <select name="" id="ubicacion" class="form-control from-control-lg">
                                                            <option value="">----Seleccione Ubicación----</option>
                                                            <?php
                                                            include '../../models/conection.php';
                                                            $sqlBuscar = "SELECT * FROM `ubicacion_req`";
                                                            $query_rol = mysqli_query($conection, $sqlBuscar);
                                                            $result_rol=mysqli_num_rows($query_rol);
                                                            if($result_rol>0)
                                                            {
                                                                while($rol=mysqli_fetch_array($query_rol)){
                                                                    
                                                        ?>
                                                                        <option value="<?php echo $rol['ubicacion'] ?>"><?php echo $rol['ubicacion'] ?></option>
                                                        <?php
                                                                        
                                                            }
                                                            }?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-row mb-3">
                                                <div class="col">     
                                                    <label for="" class="form-control-label">Solicitante</label>
                                                    <input type="text" id="solicitante" class="form-control from-control-lg" >
                                                </div>

                                                <div class="form-row mb-3">
                                                    <div class="col">     
                                                        <label for="" class="form-control-label">Fecha de Solicitud</label>
                                                        <input type="text" id="fechaSolicitud" class="form-control from-control-lg" >
                                                    </div>

                                                    <div class="col">     
                                                        <label for="" class="form-control-label">Fecha de Entrega</label>
                                                        <input type="text" id="fechaEntrega" class="form-control from-control-lg" >
                                                    </div>

                                                    <div class="col">     
                                                        <label for="" class="form-control-label">Costos</label>
                                                        <input type="text" id="costos" class="form-control from-control-lg" >
                                                    </div>
                                                </div>

                                            </div>

                                            <h4><b>Datos de Campaña</b> </h4>

                                            <hr>

                                            <div class="form-row mb-3">
                                                <div class="col">     
                                                    <label for="" class="form-control-label">Nombre de Campaña</label>
                                                    <input type="text" id="nombreCampana" class="form-control from-control-lg" >
                                                </div>

                                                <div class="col">     
                                                    <label for="" class="form-control-label">Target</label>
                                                    <input type="text" id="target" class="form-control from-control-lg" >
                                                </div>

                                                <div class="col">     
                                                    <label for="" class="form-control-label">Look&Feel</label>
                                                    <input type="text" id="look" class="form-control from-control-lg" >
                                                </div>
                                            </div>

                                            <div class="form-row mb-3">

                                                <div class="col">     
                                                    <label for="" class="form-control-label">Texto</label>
                                                    <input type="text" id="texto" class="form-control from-control-lg" >
                                                </div>


                                                <div class="form-row mb-3">
                                                    <div class="col">
                                                        <label for="" class="form-control-label">Formato</label>
                                                        <select name="" id="formato" class="form-control from-control-lg">
                                                            <option value="">----Seleccione el Formato----</option>
                                                            <?php
                                                            include '../../models/conection.php';
                                                            $sqlBuscar = "SELECT * FROM `formato_requ`";
                                                            $query_rol = mysqli_query($conection, $sqlBuscar);
                                                            $result_rol=mysqli_num_rows($query_rol);
                                                            if($result_rol>0)
                                                            {
                                                                while($rol=mysqli_fetch_array($query_rol)){
                                                                    
                                                        ?>
                                                                        <option value="<?php echo $rol['Formato'] ?>"><?php echo $rol['Formato'] ?></option>
                                                        <?php
                                                                        
                                                            }
                                                            }?>
                                                        </select>
                                                    </div>

                                                    <div class="col">     
                                                        <label for="" class="form-control-label">Medidas o Pixeles</label>
                                                        <input type="text" id="medidas" class="form-control from-control-lg" >
                                                    </div>

                                                    <div class="col">     
                                                        <label for="" class="form-control-label">Duración [seg]</label>
                                                        <input type="text" id="duracion" class="form-control from-control-lg input-number" >
                                                    </div>
                                                </div>

                                            </div>
                                            
                                            <div class="form-row mb-3">

                                                <div class="col">     
                                                    <label for="" class="form-control-label">Responsable</label>
                                                    <input type="text" id="responsable" class="form-control from-control-lg" >
                                                </div>

                                                <div class="col">     
                                                    <label for="" class="form-control-label">Avance</label>
                                                    <input type="text" id="avance" class="form-control from-control-lg" >
                                                </div>

                                                <div class="form-row mb-3">
                                                    <div class="col">     
                                                        <label for="" class="form-control-label">Horas</label>
                                                        <input type="text" id="horas" class="form-control from-control-lg" >
                                                    </div>
                                                </div>

                                            </div>

                                            <h4><b>Anexos</b> </h4>
                                            <hr>
                                            <div class="form-row mb-3">
                                                <div class="col">     
                                                    <label for="" class="form-control-label">Links</label>
                                                    <input type="text" id="links" class="form-control from-control-lg" >
                                                </div>

                                                <div class="col">     
                                                    <label for="" class="form-control-label">Archivos</label>
                                                    <input type="text" id="archivos" class="form-control from-control-lg input-number" >
                                                </div>

                                                <div class="col">     
                                                    <label for="" class="form-control-label">Comentarios</label>
                                                    <input type="text" id="comentarios" class="form-control from-control-lg input-number" >
                                                </div>
                                            </div>

                                        </div>
                                        
                                </div>
                        </div>    
                    </div>  
 
                </div>

            </div>           
        </main>
    </div>


            <div id="documents" class="modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"> <i class="bi bi-plus-lg"> </i>Add</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div >

                                
                                <div class="modal-body">                              
                                                    <table class="table">
                                                        <tr>
                                                            <h3 class="col-center">Documentos Incripción</h3>
                                                            <div class="container">
                                                               
                                                                
                                                                <div class="row">
                                                                    
                                                                    <div class="col-4">
                                                                        
                                                                        <label for="" class="form-control-label col-center ">Formulario de inscripción</label>
                                                                            <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                <input  type="file" name="file" id="formularioInscripcion" class="file"/>
                                                                                <label class="file-input__label" for="file-input">
                                                                            </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        
                                                                        <label for="" class="form-control-label col-center ">Contrato</label>
                                                                            <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                <input  type="file" name="file" id="contrato" class="file"/>
                                                                                <label class="file-input__label" for="file-input">
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Pasaporte</label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="pasaporte" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Cotización aceptada </label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="cotizacionAceptada" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                    
                                                           
                                                        </tr>

                                                        <tr>
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Factura Inscripción</label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="facturaIncripcion" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                                    
                                                           
                                                        </tr>


                                                        <tr>
                                                            <h3 class="col-center">Aceptación</h3>
                                                            
                                                            <tr>
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Factura escuela cliente</label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="facturaEscuelaCliente" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Factura escuela GLED </label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="facturaEscuelaGled" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                    
                                                           
                                                        </tr>

                                                        <tr>
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Carta de aceptación</label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="cartaAceptacion" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Confirmación inscripción </label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="confirmacionInscripcion" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                    
                                                           
                                                        </tr>


                                                        

                                                        
                                                        <tr>
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">POF</label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="pof" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Custodianship </label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="custodianship" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                    
                                                           
                                                        

                                                        </tr>
                                                        <tr>
                                                        
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Visa letter</label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="visaLetter" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                                    
                                                           
                                                        </tr>


                                                        <tr>
                                                            <h3 class="col-center">Confirmación</h3>
                                                        </tr>    
                                                        <tr>
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Pasaje</label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="pasaje" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Seguro </label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="seguro" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Confirmación Alojamiento</label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="confirmacionAlojamiento" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Confirmación transfer </label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="confirmacionTransfer" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </tr>
                                                        <tr>
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-4">
                                                                            
                                                                            <label for="" class="form-control-label col-center ">Visa copia</label>
                                                                                <div class="file-input text center pl-5" style="position: relative; top:20px">
                                                                                    <input  type="file" name="file" id="visaCopia" class="file"/>
                                                                                    <label class="file-input__label" for="file-input">
                                                                                </div>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                        </tr>
                                                        
                                                    </table>
                                                    
                                </div>
                                </div>
                       
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveDocuments();"> <i class="bi bi-plus-lg"> </i>  Guardar</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MODAL NOTES -->

                     
                    <div id="newNotes" class="modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"> <i class="bi bi-plus-lg"> </i>Create Note</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <div class="card">
                                    <div class="card-body">
                                    <!-- FORM TO ADD TASKS -->
                                        <form id="formTask">
                                            <div class="form-group">
                                            <label for="" class="form-control-label">Type</label>
                                            <select name="" id="typeNote" class="form-control from-control-lg">
                                                <option value="">Select</option>
                                                <?php
                                                    include "../../model/conection.php";
                                                    $sqlBuscar = "SELECT * FROM type_note;";
                                                    $query_rol = mysqli_query($conection, $sqlBuscar);
                                                    $result_rol=mysqli_num_rows($query_rol);
                                                
                                                ?>
                                                                            
                                                    <?php
                                                    if($result_rol>0)
                                                    {
                                                        while($rol=mysqli_fetch_array($query_rol)){
                                                    ?>
                                                                                        
                                                <option value="<?php echo $rol["note_name"]; ?>"><?php echo $rol["note_name"] ?></option>
                                                <?php        
                                                            }
                                                                                        
                                                    }

                                                ?>
                                                        
                                                </select>
                                            </div>
                                            <div class="form-group">
                                            <textarea id="description" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                           
                                        </form>
                                    </div>
                              
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" onclick="saveTask();"> <i class="bi bi-plus-lg"> </i>  Guardar</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
                       
                    </div>
                    <!--end wrapper-->
                    

                   
                    
                </body>

            </html>
