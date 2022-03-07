<script>
    $(document).ready(function(){
        var idEdit = 0;

        // Show Data
        var table = $('.tableLaporan').DataTable({
            processing: true,
            serverSide: true,
            searching:  true,
            ajax: {
            url: "{{ route('laporan.data') }}",
            data: function (d) {
                    d.kategori = $('#kategori').val()
                }
            },
            columns: [
                {data: 'id_pelapor', name: 'id_pelapor'},
                {data: 'pesan', name: 'pesan'},
                {data: 'id_kategori', name: 'id_kategori'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        // End Show

        // Filter Select
        $('#kategori').change(function(){
            console.log('oke')
            table.draw();
        });
        // End Filter

       

    })
</script>