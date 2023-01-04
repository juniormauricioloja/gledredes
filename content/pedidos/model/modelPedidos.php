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
    
    $sqlInsertar = "INSERT INTO `order_prod`(`requerimiento`, `tipo`, `ubicacion`, `formato`, `medidas`, `duracion`, `objetivo`, 
    `Target`, `lookfeel`, `texto`, `solicitante`, `fechasolicitud`, `responsable`, `avance`, `fechaentrega`, `links`, `archivos`, 
    `comentarios`, `empresa`, `unidad`, `pais`, `horas`, `campana`, `costos`) VALUES ('$requerimiento','$tipo','$ubicacion','$formato',
    '$medidas','$duracion','$objetivo','$target','$look','$texto','$solicitante','$fechaSolicitud','$responsable','$avance','$fechaEntrega',
    '$links','$archivos','$comentarios','$empresa','$unidad','$pais','$horas','$nombreCampana','$costos')";
    $result = mysqli_query($conection, $sqlInsertar);

    return $result;

}