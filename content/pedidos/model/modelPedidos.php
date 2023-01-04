<?php
function consultarPedidos(){
    include "../../../models/conection.php";
    $sqlBuscar = "SELECT * FROM order_prod";
    $result = mysqli_query($conection, $sqlBuscar);
    return $result;
}

function leads($pais,$empresa,$unidad,$requerimiento,$objetivo,$tipo, $ubicacion, $solicitante, $fechaSolicitud, $fechaEntrega,
                $costos, $nombreCampana, $target, $look, $texto, $formato, $medidas, $duracion, $responsable, $avance, $horas, $links, $archivos,
                $comentarios){
    include "../../../models/conection.php";
    
    $sqlInsertar = "INSERT INTO `order_prod`(`Requerimiento`, `Tipo`, `Ubicación`, `Formato`, `Medidas o Pixeles`, `Duración [seg]`, `Objetivo`, 
    `Target`, `Look&Feel`, `Texto`, `Solicitante`, `Fecha Solicitud`, `Responsable`, `Avance`, `Fecha Entrega`, `Links`, `Archivos`, 
    `Comentarios`, `Empresa`, `Unidad`, `País`, `Horas`, `Nombre Campaña`, `Costos`) VALUES ('$requerimiento','$tipo','$ubicacion','$formato',
    '$medidas','$duracion','$objetivo','$target','$look','$texto','$solicitante','$fechaSolicitud','$responsable','$avance','$fechaEntrega',
    '$links','$archivos','$comentarios','$empresa','$unidad','$pais','$horas','$nombreCampana','$costos')";
    $result = mysqli_query($conection, $sqlInsertar);

    return $result;

}