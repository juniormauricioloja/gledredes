<?php

function updateTemp($id, $fecha, $semana, $objetivo, $status, $herramienta, $colaboracion, $redsocial, $topico, $post, $contenido, $linkblog, $linkrrss, $linkweb, $linkform, $youtube, $arte, $logo, $comentarios,  $responsable, $numeroFilas)
{
    include "../../../models/conection.php";

    $string = "('$id[0]','$fecha[0]','$semana[0]', '','$objetivo[0]','$herramienta[0]','$colaboracion[0]','$post[0]','$contenido[0]','$redsocial[0]','$topico[0]','','','','','','$linkblog[0]','$linkrrss[0]','$linkweb[0]','$linkform[0]','$youtube[0]','$arte[0]','$logo[0]','$comentarios[0]','','','','','','','','$status[0]','$responsable[0]')";

    for ($i = 1; $i < $numeroFilas - 1; $i++) {
        if ($id[$i] != '') {
            $string = $string . ",('$id[$i]','$fecha[$i]','$semana[$i]', '','$objetivo[$i]','$herramienta[$i]','$colaboracion[$i]','$post[$i]','$contenido[$i]','$redsocial[$i]','$topico[$i]','','','','','','$linkblog[$i]','$linkrrss[$i]','$linkweb[$i]','$linkform[$i]','$youtube[$i]','$arte[$i]','$logo[$i]','$comentarios[$i]','','','','','','','','$status[$i]','$responsable[$i]')";
        }
    }
    //$sqlUpload = "INSERT INTO `dbcontenidoredes`(`id`,`year`, `semana`, `mes`, `fecha`, `objetivo`, `status`, `herramienta`, `colaboracion`, `redsocial`, `topico`,`post`, `contenido`,  `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `responsable`) VALUES $string";
    $sqlUpload="INSERT INTO `dbcontenidoredes`(`id`, `fecha`, `semana`,  `pais`, `objetivo`, `herramienta`, `colaboracion`, `post`, `contenido`, `redsocial`, `topico`, `facebook`, `instagram`, `tiktok`, `linkedin`, `otros`, `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `alcance`, `megusta`, `compartir`, `punt_alcance`, `punt_megusta`, `punt_compartir`, `puntuacion`, `status`, `responsable`) 
    VALUES $string";
    $result = mysqli_query($conection, $sqlUpload);
    return "string=".$string." result=".$result."numerofilas=".$numeroFilas;
}

function uploadFile($programa)
{
    include "../../../models/conection.php";
    
    $sqlUpdate = "UPDATE `dbcontenidoredes` AS TB1, `dbcontenidoredes".$programa."` AS TB2 SET  TB2.semana=TB1.semana, TB2.fecha=TB1.fecha, TB2.objetivo=TB1.objetivo, TB2.herramienta=TB1.herramienta,
            TB2.colaboracion=TB1.colaboracion, TB2.post=TB1.post, TB2.contenido=TB1.contenido, TB2.redsocial=TB1.redsocial,
            TB2.topico=TB1.topico, TB2.facebook=TB1.facebook, TB2.instagram=TB1.instagram, TB2.tiktok=TB1.tiktok, TB2.linkedin=TB1.linkedin,
            TB2.otros=TB1.otros, TB2.linkblog=TB1.linkblog, TB2.linkrrss=TB1.linkrrss, TB2.linkweb=TB1.linkweb, TB2.linkform=TB1.linkform,
            TB2.linkyoutube=TB1.linkyoutube, TB2.arte=TB1.arte, TB2.logos=TB1.logos, TB2.comentario=TB1.comentario, TB2.alcance=TB1.alcance,
            TB2.megusta=TB1.megusta, TB2.compartir=TB1.compartir, TB2.punt_alcance=TB1.punt_alcance, TB2.punt_megusta=TB1.punt_megusta,
            TB2.punt_compartir=TB1.punt_compartir, TB2.puntuacion=TB1.puntuacion, TB2.status=TB1.status, TB2.responsable=TB1.responsable
            WHERE TB2.id=TB1.id;";
    $result = mysqli_query($conection, $sqlUpdate);
    
    $sqlTruncate = "TRUNCATE TABLE `dbcontenidoredes`";
    $resultsql = mysqli_query($conection, $sqlTruncate);

    return $result;
}

