<?php

    // $tasks = $_POST["emps"]; 
    // $aux=json_decode(json_encode($tasks));

    // foreach($aux as $aux2){

    //     echo $aux2->description;
    // }
  
    
include "../model/modelPedidos.php";

$aux = $_POST["aux"];
if($aux=="save"){
    $pais=$_POST["pais"];
    $empresa=$_POST["empresa"];
    $unidad=$_POST["unidad"];
    $requerimiento=$_POST["requerimiento"];
    $objetivo=$_POST["objetivo"];
    $tipo=$_POST["tipo"];
    $ubicacion=$_POST["ubicacion"];
    $solicitante=$_POST["solicitante"];
    $fechaSolicitud=$_POST["fechaSolicitud"];
    $fechaEntrega=$_POST["fechaEntrega"];
    $costos=$_POST["costos"];
    $nombreCampana=$_POST["nombreCampana"];
    $target=$_POST["target"];
    $look=$_POST["look"];
    $texto=$_POST["texto"];
    $formato=$_POST["formato"];
    $medidas=$_POST["medidas"];
    $duracion=$_POST["duracion"];
    $responsable=$_POST["responsable"];    
    $avance=$_POST["avance"];
    $horas=$_POST["horas"];
    $links=$_POST["links"];
    $archivos=$_POST["archivos"];
    $comentarios=$_POST["comentarios"];

    

    $leads=leads($pais,$empresa,$unidad,$requerimiento,$objetivo,$tipo, $ubicacion, $solicitante, $fechaSolicitud, $fechaEntrega,
    $costos, $nombreCampana, $target, $look, $texto, $formato, $medidas, $duracion, $responsable, $avance, $horas, $links, $archivos,
    $comentarios);

    echo $leads;
}





if ($aux=="consultarPedido"){

    $listaPerfiles = consultarPedidos();

    ?>
   <table class="display table table-hover table-striped" style="width: 100%;" id="tablaClients">
        <thead>

            <tr>
            
          <th>Requerimiento</th>
          <th>Tipo</th>
          <th>Ubicación</th>
          <!-- <th>AÑO INS</th>
          <th>MES INS</th> -->
          <th>Formato</th>
          <!-- <th>AÑO CAX</th>
          <th>MES CAX</th>
          <th>RAZON</th> -->
          <th>Medidas o Pixeles</th>
          <th>Duración</th>
          <th>Objetivo</th>
          <!-- <th>Año V</th>
          <th>Mes V</th> -->
          <th>Target</th>
          <th>Look&Feel</th>
          <th>Texto</th>
          <th>Solicitante</th>
          <th>Fecha Solicitud</th>
          <th>Responsable</th>
          <th>Avance</th>
          <th>Fecha Entrega</th>
          <th>Links</th>
          <th>Archivos</th>
          <th>Comentarios</th>
          <th>Empresa</th>
          <th>Unidad</th>
          <th>País</th>
          <th>Horas</th>
          <th>Nombre Campaña</th>
          <th>Costos</th>
          
          
       
          
               
            </tr>
        </thead>
        <tbody>
        <tr>
        <?php
          foreach ($listaPerfiles as $auxLista) {
            ?>
          <!--  
          <th>
          <table>
                <td>
                <form  action="viewclient.php" method="POST">
                <input name="id" value="<?php echo $auxLista["ID"]; ?>" type="hidden" id="ID" >
                <button class="btn btn-outline-secondary btn-sm mr-1" type="submit">
                  <span class="bi bi-view-list" ></span>
                </button>
              </form>
                </td>
                <td>
                <button class="btn btn-outline-secondary btn-sm mr-1" onclick="deletelead('<?php echo $auxLista['ID']; ?>');">
                <form  action="viewclient.php" method="POST">
                <input name="id" value="<?php echo $auxLista["ID"]; ?>" type="hidden" id="id" >
                  <span class="bi bi-trash" ></span>
                </button>
              </form>
                </td>
                <td>
                <form  action="editclient.php" method="POST">
                <input name="id" value="<?php echo $auxLista["ID"]; ?>" type="hidden" id="id" >
                <button class="btn btn-outline-secondary btn-sm mr-1" type="submit">
                  <span class="bi bi-pencil" ></span>
                </button>
              </form>
                </td>
              </table>
          </th>
          -->
          
        <td><?php echo $auxLista["requerimiento"]; ?></td>
        <td><?php echo $auxLista["tipo"]; ?></td>
        <td><?php echo $auxLista["ubicación"]; ?></td>
        <!-- <td><?php #echo $auxLista["yearins"]; ?></td>
        <td><?php #echo $auxLista["mesins"]; ?></td> -->
        <td><?php echo $auxLista["formato"]; ?></td>
        <!--<td><?php #echo $auxLista["yearcax"]; ?></td>
        <td><?php #echo $auxLista["mescax"]; ?></td>
        <td><?php #echo $auxLista["razon"]; ?></td> -->
        <td><?php echo $auxLista["medidas"]; ?></td>
        <td><?php echo $auxLista["duracion"]; ?></td>
        <td><?php echo $auxLista["objetivo"]; ?></td>
        <!-- <td><?php #echo $auxLista["yearv"]; ?></td>
        <td><?php #echo $auxLista["mesv"]; ?></td> -->
        <td><?php echo $auxLista["target"]; ?></td>
        <td><?php echo $auxLista["lookfeel"]; ?></td>
        <td><?php echo $auxLista["texto"]; ?></td>
        <td><?php echo $auxLista["solicitante"]; ?></td>
        <td><?php echo $auxLista["fechasolicitud"]; ?></td>
        <td><?php echo $auxLista["responsable"]; ?></td>
        <td><?php echo $auxLista["avance"]; ?></td>
        <td><?php echo $auxLista["fechaentrega"]; ?></td>
        <td><?php echo $auxLista["links"]; ?></td>
        <td><?php echo $auxLista["archivos"]; ?></td>
        <td><?php echo $auxLista["comentarios"]; ?></td>
        <td><?php echo $auxLista["empresa"]; ?></td>
        <td><?php echo $auxLista["unidad"]; ?></td>
        <td><?php echo $auxLista["pais"]; ?></td>
        <td><?php echo $auxLista["horas"]; ?></td>
        <td><?php echo $auxLista["campana"]; ?></td>
        <td><?php echo $auxLista["costos"]; ?></td>
        <!-- <td><?php #echo $auxLista["total_invoice"]; ?></td>
        <td><?php #echo $auxLista["total_net"]; ?></td>
        <td><?php #echo $auxLista["exchange_rate_average"]; ?></td>
        <td><?php #echo $auxLista["visa"]; ?></td>
        <td><?php #echo $auxLista["alojamiento"]; ?></td>
        <td><?php #echo $auxLista["vuelo"]; ?></td> -->
       
      </tr>

                <?php
            }
            ?>
        </tbody>
    </table>

<?php

}