<script>
    $(document).ready(function(){
        var idEdit = 0;

        // Show Data
        var table = $('.tableLaporan').DataTable({
            processing: true,
            serverSide: true,
            searching:  true,
            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
            url: "{{ route('laporan.data.status') }}",
            data: function (d) {
                    d.status = $('#status').val()
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
                {data: 'alamat', name: 'alamat'},
                {data: 'id_opd', name: 'id_opd'},
                {data: 'id_kategori', name: 'id_kategori'},
                {data: 'status', name: 'status'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        // End Show

        // Filter Select
        $('#status').change(function(){
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