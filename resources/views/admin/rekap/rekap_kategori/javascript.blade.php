<script>
    $(document).ready(function(){
      
         // Show Data
         var table = $('.tableRekap').DataTable({
            processing: true,
            searching:  true,
            // dom: 'lBfrtip',
            dom: '<"row"lf>rti<"row"Bp>',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            ajax: {
            url: "{{ route('rekap.data.kategori') }}",
            },
            columns: [
                {data: 'kategori', name: 'kategori'},
                {data: 'total', name: 'total'},
                {data: 'waiting', name: 'waiting'},
                {data: 'approved', name: 'approved'},
                {data: 'rejected', name: 'rejected'},
                {data: 'process', name: 'process'},
                {data: 'complete', name: 'complete'},
            ]
        });
        // End Show

        // dom and Button Style
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
       
    })
</script>