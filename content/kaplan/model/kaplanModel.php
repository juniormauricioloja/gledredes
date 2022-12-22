<?php

function consultarRedes($pais)
{
    include "../../../models/conection.php";
    $sqlBuscar = "SELECT * FROM dbcontenidoredeskaplan WHERE `pais`= '$pais'";
    $result = mysqli_query($conection, $sqlBuscar);
    return $result;
}

function search($id)
{
    include "../../../models/conection.php";
    $sqlBuscar = "SELECT * FROM `dbcontenidoredeskaplan` WHERE `id`= '$id';";
    $result = mysqli_query($conection, $sqlBuscar);

    if (mysqli_num_rows($result) > 0) {
        return $result;
    }else{
        return false;
    }
    
}

function aprobar($id,$comentario)
{
    include "../../../models/conection.php";
    $sqlUpdate = "UPDATE `dbcontenidoredeskaplan` SET `comentario`='$comentario', `status`='APROBADO' WHERE `id`='$id'";
    $result = mysqli_query($conection, $sqlUpdate);

    return $result;
}

function ejecutado($id)
{
    include "../../../models/conection.php";
    $sqlUpdate = "UPDATE `dbcontenidoredeskaplan` SET `status`='EJECUTADO' WHERE `id`='$id'";
    $result = mysqli_query($conection, $sqlUpdate);

    return $result;
}

function puntuacion($id,$alcance,$meGusta, $compartir , $puntuacion)
{
    include "../../../models/conection.php";
    $sqlUpdate = "UPDATE `dbcontenidoredeskaplan` SET `status`='EVALUADO' ,`alcance`='$alcance',`megusta`='$meGusta',`compartir`='$compartir', `puntuacion`='$puntuacion' WHERE `id`='$id'";
    $result = mysqli_query($conection, $sqlUpdate);

    return $result;
}

function update($id,$year, $mes, $semana, $fecha, $objetivo, $herramienta, $colaboracion, $redsocial, $post, $contenido, $linkblog
,$linkrrss, $linkweb, $linkform, $linkyoutube, $arte, $comentario, $responsable, $alcance, $megusta, $compartir, $puntuacion){

    include "../../../models/conection.php";
    $sqlUpdate = "UPDATE `dbcontenidoredeskaplan` SET `year`='$year',`mes`='$mes',`semana`='$semana',`fecha`='$fecha',
    `objetivo`='$objetivo',`herramienta`='$herramienta',`colaboracion`='$colaboracion',`post`='$post',`contenido`='$contenido',
    `redsocial`='$redsocial',`linkblog`='$linkblog',`linkrrss`='$linkrrss',`linkweb`='$linkweb',`linkform`='$linkform',
    `linkyoutube`='$linkyoutube',`arte`='$arte',`comentario`='$comentario',`responsable`='$responsable' , `alcance`='$alcance', 
    `megusta`='$megusta', `compartir`='$compartir', `puntuacion`='$puntuacion' WHERE `id` = '$id'";
    $result = mysqli_query($conection, $sqlUpdate);
    return $result;

}

function consultaredes($id){
    include "../../../models/conection.php";
    $sqlSelect = "SELECT * FROM `dbcontenidoredeskaplan` WHERE `id`='$id'";
    $result = mysqli_query($conection, $sqlSelect);
    return $result;
}

function searchKaplan($pais,$responsable,$status,$startDate,$endDate){
    include "../../../models/conection.php";
    $selectPais="";
    $selectResponsable="";
    $selectStatus = "";

        if($pais != "Todos"){
            $selectPais="AND `pais`='$pais' ";
        }
        if($responsable != "Todos"){
            $selectResponsable="AND `responsable`='$responsable' ";
        }
        if($status != "Todos"){
            $selectStatus="AND `status`='$status'";
        }

    $sqlSelect = "SELECT * FROM `dbcontenidoredeskaplan` WHERE `fecha` BETWEEN '".$startDate."' AND '".$endDate."' ".$selectPais." ".$selectResponsable." ".$selectStatus;
    $result = mysqli_query($conection, $sqlSelect);
    return $result;

    
}

function deleteRed($idaux){
    include "../../../models/conection.php";
    $sqlDelete="DELETE FROM `dbcontenidoredeskaplan` WHERE `id` = '$idaux'";
    $result = mysqli_query($conection, $sqlDelete);
    return $result;
}

/*
function checkFlujo($id,$comentarios){
    include "../../../model/conection.php";
    $sqlUpdate = "UPDATE `flujochile` SET `statusver`='1',`comentarios`='$comentarios' WHERE `id`='$id'";
    $result = mysqli_query($conection, $sqlUpdate);
    return $result;
}
*/

