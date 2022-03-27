<script>
    $(document).ready(function(){
      
         // Show Data
         var table = $('.tableRekap').DataTable({
            processing: true,
            serverSide: true,
            searching:  true,
            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
            url: "{{ route('rekap.data') }}",
            },
            columns: [
                {data: 'total', name: 'total'},
                {data: 'waiting', name: 'waiting'},
            ]
        });
        // End Show
       
    })
</script>