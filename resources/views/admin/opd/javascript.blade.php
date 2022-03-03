<script>
    $('#admin').select2({
        theme: 'bootstrap4',
    });
    $('#wilayah').select2({
        theme: 'bootstrap4',
    });
    $(document).ready(function(){
        var idEdit = 0;

        // Show Data
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('opd.opd') }}",
            'columnDefs': [
            {
                "targets": [0,1,4], // your case first column
                "className": "text-center"
            }],
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'nama', name: 'nama'},
                {data: 'id_admin', name: 'id_admin'},
                {data: 'id_wilayah', name: 'id_wilayah'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        // End Show

        // Create Modal
        $('#addOpd').click(function () {
            $('#frm_add').trigger("reset");
            $('#modalOpd').modal('show');
                $.ajax({
                url:"{{ route('opd.data') }}",
                type:'GET',
                success:function(res){
                    $("#admin").empty();
                    $("#wilayah").empty();
                    $.each(res.data,function(key, value)
                    {
                        $("#admin").append('<option value=' + value.id + '>' + value.nama + '</option>');
                    });
                    $.each(res.wilayah,function(key, value)
                    {
                        $("#wilayah").append('<option value=' + value.id + '>' + value.nama_will + '</option>');
                    });
                }
            })
        });

        // Store Data
        $('#saveBtn').click(function(){
            var url;
            var type;
            
            if(idEdit === 0)
            {
                url = "{{ route('opd.store') }}"
                type = "POST"
            }else{

                url = '{{ route("opd.update", ":id") }}';
                url = url.replace(':id', idEdit );
                
                type = "PUT"
            }
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : "{{csrf_token()}}"
                },
                type : type,
                url : url,
                data : $('#frm_add').serialize(),
                success : function(response){
                    Swal.fire({
                        title : 'Berhasil !',
                        icon: 'success',
                        text  : 'Berhasil',
                        showConfirmButton : true
                    })
                    idEdit = 0;
                    $('#frm_add').trigger("reset");
                    $('#modalOpd').modal('hide');
                    table.draw()
                }
            })
        });
        // End Store Data

        
        // EDIT DATA
        $('body').on('click','#edit',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("opd.edit",":id") }}'
            url = url.replace(':id',id)

            $.ajax({
                type : 'GET',
                url : url,
                success:function(res){
                    console.log(res)
                    idEdit = res.data.id;
                    $('#frm_add').trigger("reset");
                    $('#modalOpd').modal('show');
                    $('#nama').val(res.data.nama);
                    $("#admin").empty()
                    $("#wilayah").empty()
                    // $("#admin").append('<option value="'+res.data.id+'">Default=='+data.default.name+'</option>');
                    $.each(res.admin,function(key, value)
                    {
                        $("#admin").append('<option value=' + value.id + '>' + value.nama + '</option>');
                    });
                    $.each(res.admin,function(key, value)
                    {
                        $("#wilayah").append('<option value=' + value.id + '>' + value.nama_will + '</option>');
                    });

                }
            })
        })
        // END EDIT
        
        // Delete
        $('body').on('click','#delete',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("opd.delete", ":id") }}';
            url = url.replace(':id', id );
            Swal.fire({
                title : 'Anda Yakin ?',
                text  : 'Data Yang Sudah Dihapus Tidak Akan Bisa Dikembalikan',
                icon  : 'warning',
                showConfirmButton : true,
                showCancelButton :true,
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Tidak, Batalkan!',
                allowOutsideClick: false,
            })
            .then((result)=>{
                if(result.value) {
                    $.ajax({
                        headers:{
                            'X-CSRF-TOKEN' : '{{csrf_token()}}'
                        },
                        type : 'DELETE',
                        url:url,
                        success:function(response){
                        
                            Swal.fire({
                                title: 'Berhasil!',
                                icon : 'success',
                                text : 'Data Berhasil Di Hapus',
                                showConfirmButton :true
                            })
                        
                            table.draw()
                        }
                    })
                }else{
                    Swal.close()
                }
            })
        })
    // End Delete



    })
</script>