<script>
    $(document).ready(function(){
        var idEdit = 0;

        // Show Data
        var table = $('.tableLaporanWilayah').DataTable({
            processing: true,
            serverSide: true,
            searching:  true,
            // dom: 'lBfrtip',
            dom:'<"row"lf>rti<"row"Bp>',
            buttons: [
                {
                    extend: 'print',
                    // autoPrint: false,
                    title:'Laporan Pengaduan per Wilayah',
                    customize: function ( win ) 
                    {
                        $(win.document.body).find('h1').css('text-align', 'center');
                        $(win.document.body)
                            .css( 'font-size', '10pt' )
                            .prepend(
                                '<img src="{!! asset('assets_user/media/favicons/ugl1.png') !!}" style="height:100px; display: block;margin-left: auto;margin-right: auto;" />'
                            );
    
                        $(win.document.body).find( 'table' )
                            .addClass( 'compact' )
                            .css( 'font-size', 'inherit' );

                        // Landscape
                        var last = null;
                        var current = null;
                        var bod = [];

                        var css = '@page { size: landscape; }',
                            head = win.document.head || win.document.getElementsByTagName('head')[0],
                            style = win.document.createElement('style');

                        style.type = 'text/css';
                        style.media = 'print';

                        if (style.styleSheet)
                        {
                        style.styleSheet.cssText = css;
                        }
                        else
                        {
                        style.appendChild(win.document.createTextNode(css));
                        }

                        head.appendChild(style);
                    },
                    text:'Download',
                    exportOptions: {
                        stripHtml: false
                    }
                }
            ],
            ajax: {
            url: "{{ route('laporan.data.wilayah') }}",
            data: function (d) {
                    d.wilayah = $('#wilayah').val()
                    d.awal = $('input[name=awal]').val();
                    d.akhir = $('input[name=akhir]').val();
                }
            },
            'columnDefs': [
            {
                "targets": [0,2,3,4,5], // your case first column
                "className": "text-center"
            }],
            columns: [
                {data: 'id_pelapor', name: 'id_pelapor'},
                {data: 'pesan', name: 'pesan'},
                {data: 'id_wil', name: 'id_wil'},
                {data: 'status', name: 'status'},
                {data: 'created_at', name: 'created_at'},
                {data: 'bukti', name: 'bukti'},
            ]
        });
        // End Show

        // dom Style
        $("#DataTables_Table_0_wrapper > div.row").css("display", "grid");
        $("#DataTables_Table_0_wrapper > div.row").css("grid-template-columns", "auto auto");
        $("#DataTables_Table_0_wrapper > div.row").css("margin-top", "1%");

        $("#DataTables_Table_0_wrapper > div.row > div.dataTables_filter").css("margin-right", "12.5px");
        $("#DataTables_Table_0_wrapper > div.row > div.dataTables_length").css("margin-left", "12.5px");

        $("#DataTables_Table_0_wrapper > div.row > #DataTables_Table_0_paginate").css("margin-right", "12.5px");
        $("#DataTables_Table_0_wrapper > div.row > div.dt-buttons").css("margin-left", "12.5px");

        $("#DataTables_Table_0_wrapper > div.row > div.dt-buttons > button").css("border", "1px solid #3F9CE8");
        $("#DataTables_Table_0_wrapper > div.row > div.dt-buttons > button").css("border", "1px solid #3F9CE8");
        $("#DataTables_Table_0_wrapper > div.row > div.dt-buttons > button").css("border-radius", "4px");
        $("#DataTables_Table_0_wrapper > div.row > div.dt-buttons > button").css("padding", "4px 10px");
        $("#DataTables_Table_0_wrapper > div.row > div.dt-buttons > button").css("color", "white");
        $("#DataTables_Table_0_wrapper > div.row > div.dt-buttons > button").css("background-color", "#3F9CE8");
        $("#DataTables_Table_0_wrapper > div.row > div.dt-buttons > button").css("margin", "auto");
        // End dom Style

        // Filter Select
        $('#wilayah').change(function(){
            console.log('oke')
            table.draw();
        });
        // End Filter


        var awal, akhir;
 
        // Custom filtering function which will search data in column four between two values
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = awal.val();
                var max = akhir.val();
                var date = new Date( data[4] );
        
                if (
                    ( min === null && max === null ) ||
                    ( min === null && date <= max ) ||
                    ( min <= date   && max === null ) ||
                    ( min <= date   && date <= max )
                ) {
                    return true;
                }
                return false;
            }
        );
 
        // Create date inputs
        awal = $('#awal').datepicker({
                    autoclose: true,
                    todayHighlight: true,
                    format: 'yyyy-mm-dd'
            });
        akhir = $('#akhir').datepicker({
                    autoclose: true,
                    todayHighlight: true,
                    format: 'yyyy-mm-dd'
            });
    
        // Refilter the table
        $('#awal, #akhir').on('change', function () {
            table.draw();
        });


       

    })
</script>