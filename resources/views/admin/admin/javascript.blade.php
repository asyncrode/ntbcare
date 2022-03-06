<script>
    $('#role').select2({
        theme: 'bootstrap4',
    });

    $(document).ready(function(){
        var idEdit = 0;

        // Show Data
        var table = $('.tableAdmin').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.data') }}",
        'columnDefs': [
        {
            // "targets": [0,1,4], // your case first column
            "className": "text-center"
        }],
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nama', name: 'nama'},
            {data: 'email', name: 'email'},
           
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
        // End Show

        // Create Modal
        $('#addAdmin').click(function () {
            $('#frm_admin').trigger("reset");
            $('#modalAdmin').modal('show');
                $.ajax({
                url:"{{ route('admin.role') }}",
                type:'GET',
                success:function(res){
                    console.log(res)
                    $("#role").empty();
                    $.each(res.role,function(key, value)
                    {
                        $("#role").append('<option value=' + value.id + '>' + value.name + '</option>');
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
                url = "{{ route('admin.store') }}"
                type = "POST"
            }else{

                url = '{{ route("admin.update", ":id") }}';
                url = url.replace(':id', idEdit );
                
                type = "PUT"
            }
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : "{{csrf_token()}}"
                },
                type : type,
                url : url,
                data : $('#frm_admin').serialize(),
                success : function(response){
                    Swal.fire({
                        title : 'Berhasil !',
                        icon: 'success',
                        text  : 'Berhasil',
                        showConfirmButton : true
                    })
                    idEdit = 0;
                    $('#frm_admin').trigger("reset");
                    $('#modalAdmin').modal('hide');
                    table.draw()
                }
            })
        });
        // End Store Data

        
        // EDIT DATA
        $('body').on('click','#edit',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("admin.edit",":id") }}'
            url = url.replace(':id',id)

            $.ajax({
                type : 'GET',
                url : url,
                success:function(res){
                    console.log(res)
                    idEdit = res.data.id;
                    $('#frm_admin').trigger("reset");
                    $('#modalAdmin').modal('show');
                    $('#id').val(res.data.id);
                    $('#nama').val(res.data.nama);
                    $('#email').val(res.data.email);
                    $('#password-form').hide();
                    $("#role").empty()
                    // $("#admin").append('<option value="'+res.data.id+'">Default=='+data.default.name+'</option>');
                    $.each(res.role,function(key, value)
                    {
                        $("#role").append('<option value=' + value.id + '>' + value.name + '</option>');
                    });

                }
            })
        })
        // END EDIT
        
        // Delete
        $('body').on('click','#delete',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("admin.delete", ":id") }}';
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