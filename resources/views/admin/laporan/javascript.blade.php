<script>
    $(document).ready(function(){
        var idEdit = 0;

        // Show Data
        var table = $('.tableLaporan').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('laporan.data') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'id_pelapor', name: 'id_pelapor'},
                {data: 'pesan', name: 'pesan'},
                {data: 'id_kategori', name: 'id_kategori'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        // End Show

        // Filter Select
        $('#kategoriFilter').change(function(){
            console.log('oke')
            table.column($(this).data('column'))
                .search($(this).val())
                .draw()
        })
        // End Filter

       

    })
</script>