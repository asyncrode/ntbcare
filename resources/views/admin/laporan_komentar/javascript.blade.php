<script>
    $(document).ready(function(){
        var idEdit = 0;

        // Show Data
        var table = $('.tableLaporanKomentar').DataTable({
            processing: true,
            serverSide: true,
            searching:  true,
            dom: 'lBfrtip',
            buttons: [
                {
                    extend: 'print',
                    // autoPrint: false,
                    title:'Laporan Pengaduan per Komentar',
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
            url: "{{ route('laporan.data.komentar') }}",
            data: function (d) {
                    d.opd = $('#opd').val()
                    d.awal = $('input[name=awal]').val();
                    d.akhir = $('input[name=akhir]').val();
                }
            },
            'columnDefs': [
            {
                "targets": [0,3,4,5], // your case first column
                "className": "text-center"
            }],
            columns: [
                {data: 'id_pelapor', name: 'id_pelapor'},
                {data: 'pesan', name: 'pesan'},
                {data: 'komentar', name: 'komentar'},
                {data: 'id_opd', name: 'id_opd'},
                {data: 'status', name: 'status'},
                {data: 'created_at', name: 'created_at'},
                {data: 'bukti', name: 'bukti'},
            ]
        });
        // End Show

        // Filter Select
        $('#opd').change(function(){
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