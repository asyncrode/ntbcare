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
            // ajax: {
            // url: "{{ route('rekap.data') }}",
            // },
            // columns: [
            //     {data: 'id_opd', name: 'id_opd'},
            //     {data: 'waiting', name: 'waiting'},
            // ]
        });
        // End Show
       
    })
</script>