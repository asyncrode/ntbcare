<script>
    $(document).ready(function(){
      
         // Show Data
         var table = $('.tableRekap').DataTable({
            processing: true,
            searching:  true,
            dom: 'lBfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
            url: "{{ route('rekap.data') }}",
            },
            columns: [
                {data: 'nama', name: 'nama'},
                {data: 'total', name: 'total'},
                {data: 'waiting', name: 'waiting'},
                {data: 'approved', name: 'approved'},
                {data: 'rejected', name: 'rejected'},
                {data: 'process', name: 'process'},
                {data: 'complete', name: 'complete'},
            ]
        });
        // End Show
       
    })
</script>