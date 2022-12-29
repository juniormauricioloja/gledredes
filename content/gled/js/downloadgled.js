$(document).ready(function(){

    
});

function searchGled(){

    let pais = document.getElementById("pais").value;
    let responsable = document.getElementById("responsable").value;
    let status = document.getElementById("status").value;
    let startDate = document.getElementById("startDate").value;
    let endDate = document.getElementById("endDate").value;
    let order = document.getElementById("order").value;

    var cadena = "aux=searchGled&pais="+pais+"&responsable="+responsable+"&status="+status+"&startDate="+startDate+"&endDate="+endDate+"&order="+order;

    $.ajax({
        type: "POST",
        url: "controller/gledController.php",
        data: cadena,
        success: function (data) {
            $("#divTableFlujo").html(data);
            dataTable("tableRedes");
            console.log(data);
            
        },
        error: function (e) {
            console.log(e);
            error_noti("Sistema no disponible");
        }
    });

}

function dataTable(nombreTabla) {
    
    
    var table = $('#' + nombreTabla + '').DataTable({
        //orderCellsTop: true,
        //fixedHeader: true,
        "lengthMenu": [ [5, 10, 25, 50, -1], [5, 10, 25, 50, "Todos"] ],
        dom: '<Bl<t>ip>',
        "scrollX": true,
        "order": [],
        buttons: [{
            extend: 'excel',
            text: 'Descargar en Excel',
            title: 'Reporte Gled',
        },
            {
                extend: 'pdf',
                text: 'Descargar en PDF',
                orientation: 'landscape',
                title: 'Reporte Gled',
                pageSize: 'A2',
                header: true,
                footer: false,
            }
        ],
        language: {
            "decimal": ",",
            "thousands": ".",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoPostFix": "",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "loadingRecords": "Cargando...",
            "lengthMenu": "Mostrar _MENU_ registros",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            },
            "processing": "Procesando...",
            "search": "Buscar:",
            "searchPlaceholder": "Termino de busqueda",
            "zeroRecords": "No se encontraron resultados",
            "emptyTable": "Ningun dato disponible en esta tabla",
            "buttons": {
                "create": "Nuevo",
                "edit": "Cambiar",
                "remove": "Borrar",
                "copy": "Copiar",
                "csv": "fichero CSV",
                "excel": "Descargar en archivo Excel",
                "pdf": "Descargar en PDF",
                "print": "Imprimir",
                "colvis": "Visibilidad columnas",
                "collection": "ColecciÃ³n",
                "upload": "Seleccione fichero...."
            },
            "select": {
                "rows": {
                    _: '%d filas seleccionadas',
                    0: 'clic fila para seleccionar',
                    1: 'una fila seleccionada'
                }
            }
        },
        aoColumnDefs: [{
                'bSortable': false,
                'aTargets': [0]
            }]

    });
}