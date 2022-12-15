<?php
session_start();

include "../model/updateModel.php";
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Shared\Date;
$aux = $_POST["aux"];

if(isset($_FILES["file"]))
{
    $fileName = $_FILES['file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext, $allowed_ext))
    {

        $nombreArchivo = $_FILES['file']['tmp_name'];
        $documento = IOFactory::load($nombreArchivo);
        $totalHojas = $documento->getSheetCount();
        $hojaActual = $documento->getSheet(0);
        $numeroFilas = $hojaActual->getHighestDataRow();
        $letra = $hojaActual->getHighestColumn();
    
        for($indiceFila = 3; $indiceFila<=$numeroFilas; $indiceFila++){
            
            $valor1[$indiceFila-3] = $hojaActual->getCellByColumnAndRow(1,$indiceFila);
            $valor2[$indiceFila-3] = $hojaActual->getCellByColumnAndRow(2,$indiceFila);
            $valor3[$indiceFila-3] = $hojaActual->getCellByColumnAndRow(3,$indiceFila);
            $valor4[$indiceFila-3] = $hojaActual->getCellByColumnAndRow(4,$indiceFila);

            //$excelTimestamp1 = $hojaActual->getCellByColumnAndRow(5,$indiceFila)->getValue(); //valor recogido de la celda del archivo excel
            //$excelTimestamp = $hojaActual->getCellByColumnAndRow(5,$indiceFila)->getValue();
            //$aux = Date::excelToDateTimeObject($excelTimestamp);
            //$valor5[$indiceFila-3] = $aux->format('Y-m-d');
            $valor5[$indiceFila-3] = $hojaActual->getCellByColumnAndRow(5,$indiceFila);
            $valor6[$indiceFila-3] = $hojaActual->getCellByColumnAndRow(6,$indiceFila);
            $valor7[$indiceFila-3] = $hojaActual->getCellByColumnAndRow(7,$indiceFila);
            $valor8[$indiceFila-3] = $hojaActual->getCellByColumnAndRow(8,$indiceFila); 
            $valor9[$indiceFila-3] = $hojaActual->getCellByColumnAndRow(9,$indiceFila);
            $valor10[$indiceFila-3] = $hojaActual->getCellByColumnAndRow(10,$indiceFila); 
            $valor11[$indiceFila-3] = $hojaActual->getCellByColumnAndRow(11,$indiceFila);
            $valor12[$indiceFila-3]= $hojaActual->getCellByColumnAndRow(12,$indiceFila);
            $valor13[$indiceFila-3]= $hojaActual->getCellByColumnAndRow(13,$indiceFila);
            $valor14[$indiceFila-3]= $hojaActual->getCellByColumnAndRow(14,$indiceFila);
            $valor15[$indiceFila-3]= $hojaActual->getCellByColumnAndRow(15,$indiceFila);
            $valor16[$indiceFila-3]= $hojaActual->getCellByColumnAndRow(16,$indiceFila);
            $valor17[$indiceFila-3]= $hojaActual->getCellByColumnAndRow(17,$indiceFila);
            $valor18[$indiceFila-3]= $hojaActual->getCellByColumnAndRow(18,$indiceFila);
            $valor19[$indiceFila-3]= $hojaActual->getCellByColumnAndRow(19,$indiceFila);
            $valor20[$indiceFila-3]= $hojaActual->getCellByColumnAndRow(20,$indiceFila);
            $valor21[$indiceFila-3]= $hojaActual->getCellByColumnAndRow(21,$indiceFila);
            $valor22[$indiceFila-3]= $hojaActual->getCellByColumnAndRow(22,$indiceFila);
            $facebook[$indiceFila-3]=0;
            $instagram[$indiceFila-3]=0;
            $tiktok[$indiceFila-3]=0;
            $linkedin[$indiceFila-3]=0;
            $otros[$indiceFila-3]=0;
            $redes = explode("/",$valor9[$indiceFila-3]);
        }

        $uploadFile = updateTemp($valor1,$valor2,$valor3,$valor4,$valor5,$valor6,$valor7,$valor8,$valor9,$valor10,$valor11,$valor12,$valor13,$valor14,$valor15,$valor16
        ,$valor17,$valor18,$valor19,$valor20,$valor21,$valor22,$numeroFilas);
        echo $aux->format('Y-m-d');
    }
}



if($aux == "uploadFile"){
    $programa = $_POST["programa"];
    $resultado = uploadFile($programa);
    echo $resultado;
}
?>
