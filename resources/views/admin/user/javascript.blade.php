<script>
    $(document).ready(function(){
        var idEdit = 0;

        // Show Data
        var table = $('.tableUser').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('user.data') }}",
        'columnDefs': [
        {
            "targets": [0,2], // your case first column
            "className": "text-center"
        }],
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
        // End Show
})
</script>