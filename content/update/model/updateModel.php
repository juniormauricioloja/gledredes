<?php

function updateTemp($valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7, $valor8, $valor9, $valor10, $valor11, $valor12, $valor13, $valor14, $valor15, $valor16, $valor17, $valor18, $valor19, $valor20, $valor21,  $valor22, $numeroFilas)
{
    include "../../../models/conection.php";

    $string = "('$valor1[0]','$valor2[0]','$valor3[0]','$valor4[0]', '$valor5[0]','$valor6[0]','$valor7[0]','$valor8[0]','$valor9[0]','$valor10[0]','$valor11[0]','$valor12[0]','$valor13[0]','$valor14[0]','$valor15[0]','$valor16[0]','$valor17[0]','$valor18[0]','$valor19[0]','$valor20[0]','$valor21[0]','$valor22[0]')";

    for ($i = 1; $i < $numeroFilas - 1; $i++) {
        if ($valor1[$i] != '' && $valor2[$i] != '' && $valor3[$i] != '') {
            $string = $string . ",('$valor1[$i]','$valor2[$i]','$valor3[$i]','$valor4[$i]','$valor5[$i]','$valor6[$i]','$valor7[$i]','$valor8[$i]','$valor9[$i]','$valor10[$i]','$valor11[$i]','$valor12[$i]','$valor13[$i]','$valor14[$i]','$valor15[$i]','$valor16[$i]','$valor17[$i]','$valor18[$i]','$valor19[$i]','$valor20[$i]','$valor21[$i]','$valor22[$i]')";
        }
    }
    $sqlUpload = "INSERT INTO `dbcontenidoredes`(`id`,`year`, `semana`, `mes`, `fecha`, `objetivo`, `status`, `herramienta`, `colaboracion`, `redsocial`, `topico`,`post`, `contenido`,  `linkblog`, `linkrrss`, `linkweb`, `linkform`, `linkyoutube`, `arte`, `logos`, `comentario`, `responsable`)
    VALUES $string";
    $result = mysqli_query($conection, $sqlUpload);
    return "temp=" . $valor5[0];
}

function uploadFile($programa)
{
    include "../../../models/conection.php";
    
    $sqlUpdate = "UPDATE `dbcontenidoredes` AS TB1, `dbcontenidoredesupper` AS TB2 SET TB2.year=TB1.year, TB2.mes=TB1.mes, TB2.mes=TB1.mes,
            TB2.semana=TB1.semana, TB2.fecha=TB1.fecha, TB2.objetivo=TB1.objetivo, TB2.herramienta=TB1.herramienta,
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

