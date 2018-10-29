(function($) {
    "use strict"

    $("#table1").dataTable(
        {
            language:
            {
                decimal:',',
                thousands:'.',
                aria:
                {
                    sortAscending:": Activar para ordenar la columna ascendente",
                    sortDescending:": Activar para ordenar la columna descendente"
                },
                emptyTable:"No hay datos disponibles en la tabla",
                info:"Mostrando _START_ a _END_ de _TOTAL_ Registros",
                infoEmpty:"Registros no encontradas",
                infoFiltered:"(filtered1 from _MAX_ total entries)",
                lengthMenu:"_MENU_ Registros",
                search:"Buscar:",
                zeroRecords:"No se encontraron registros"
            },
            buttons:
                [
                    {
                        extend:"print",
                        exportOptions:
                        {
                            columns:':not(.notReport)'
                        },
                        className:"btn dark btn-outline"
                    },
                    {
                        extend:"pdf",
                        exportOptions:
                        {
                            columns:':not(.notReport)'
                        },
                        className:"btn red btn-outline"
                    },
                    {
                        extend:"csv",exportOptions:
                    {
                        columns:':not(.notReport)'
                    },
                        className:"btn purple btn-outline"
                    },
                    {
                        extend:"excel",
                        exportOptions:
                        {
                            columns:':not(.notReport)'
                        },
                        className:"btn green btn-outline "
                    }
                ],
            rowReorder:{},
            order:
                [
                    [0,"asc"]
                ],
            lengthMenu:[
                [5,10,15,20,-1],
                [5,10,15,20,"Todos"]
            ],
            pageLength:10,
            dom:"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"
        }
    );

    $('#table').DataTable({
        language:
        {
            decimal:',',
            thousands:'.',
            aria:
            {
                sortAscending:": Activar para ordenar la columna ascendente",
                sortDescending:": Activar para ordenar la columna descendente"
            },
            emptyTable:"No hay datos disponibles en la tabla",
            info:"Mostrando _START_ a _END_ de _TOTAL_ Registros",
            infoEmpty:"Registros no encontradas",
            infoFiltered:"(filtered1 from _MAX_ total entries)",
            lengthMenu:"_MENU_ Registros",
            search:"Buscar:",
            zeroRecords:"No se encontraron registros"
        },
        buttons:[],
        lengthMenu:[
            [5,10,15,20,-1],
            [5,10,15,20,"Todos"]
        ],
        pageLength:10,
        dom:"<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>"
    });

    //$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    setTimeout(function() {
        $('#messages').fadeOut('fast');
    }, 3000);

    $('.file-img').change(function () {
        var file = $(this).val().toLowerCase(),
            regex = new RegExp(/(.*?)\.(jpg|png|jpeg)$/);
        if(file != null){
            if(!regex.test(file)){
                $(this).val('');
                alert('Seleccione un archivo de tipo imagen');
            }
        }
    });

    $('.get-items').on('click', function(e){
        e.preventDefault();

        var id_pedido = $(this).data('id'),
            path      = $(this).data('path'),
            token     = $(this).data('token'),
            title     = $('.modal-title'),
            body      = $('.modal-body'),
            loading   = '<p align="center"><i class="fa fa-circle-o-notch fa fa-spin"></i> Cargando datos</p>',
            table     = $('#items-pedido tbody'),
            data      = {'_token':token, 'order_id':id_pedido};

        title.html('Detalle del Pedido: '+ id_pedido);
        table.html(loading);

        $.post(
            path,
            data,
            function(data){
                table.html("");

                for(var i = 0; i < data.length; i++){

                    var fila = "<tr>";
                        fila += "<td align='center'><img src='"+"/uploads/products/"+data[i].product.identifier+"/"+data[i].product.images.img1 +"'\ width='40'></td>";
                        fila += "<td>" + data[i].product.name +"</td>";
                        fila += "<td>$" + parseFloat(data[i].price).toFixed(2) +"</td>";
                        fila += "<td>$" + parseInt(data[i].quantity) +"</td>";
                        fila += "<td>$" + parseInt(data[i].quantity) * parseFloat(data[i].price).toFixed(2) +"</td>";
                        fila += "</tr>";

                    table.append(fila);
                }
            },
            'json'
        );
    });

    /*
     $('#demo').pinterest_grid({
     no_columns: 4,
     padding_x: 10,
     padding_y: 10,
     margin_bottom: 50,
     single_column_breakpoint: 700
     });
     */



})(jQuery);
