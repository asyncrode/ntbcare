<script>
    $('#opd').select2({
        theme: 'bootstrap4',
    });
    $(document).ready(function(){
        var idEdit = 0;

        // Show Data
        var table = $('.tableWilayah').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('wilayah.data') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id'},
            {data: 'nama_will', name: 'nama_will'},
            {data: 'id_opd', name: 'id_opd'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
        // End Show

        // Create Modal
        $('#addWilayah').click(function () {
            $('#frm_wilayah').trigger("reset");
            $('#modalWilayah').modal('show');
                $.ajax({
                url:"{{ route('wilayah.getOpd') }}",
                type:'GET',
                success:function(res){
                    console.log(res)
                    $("#opd").empty();
                    $.each(res.data,function(key, value)
                    {
                        $("#opd").append('<option value=' + value.id + '>' + value.nama + '</option>');
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
                url = "{{ route('wilayah.store') }}"
                type = "POST"
            }else{

                url = '{{ route("wilayah.update", ":id") }}';
                url = url.replace(':id', idEdit );
                
                type = "PUT"
            }
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : "{{csrf_token()}}"
                },
                type : type,
                url : url,
                data : $('#frm_wilayah').serialize(),
                success : function(response){
                    Swal.fire({
                        title : 'Berhasil !',
                        icon: 'success',
                        text  : 'Berhasil',
                        showConfirmButton : true
                    })
                    idEdit = 0;
                    $('#frm_wilayah').trigger("reset");
                    $('#modalWilayah').modal('hide');
                    table.draw()
                }
            })
        });
        // End Store Data

        
        // EDIT DATA
        $('body').on('click','#edit',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("wilayah.edit",":id") }}'
            url = url.replace(':id',id)

            $.ajax({
                type : 'GET',
                url : url,
                success:function(res){
                    console.log(res)
                    idEdit = res.data.id;
                    $('#frm_wilayah').trigger("reset");
                    $('#modalWilayah').modal('show');
                    $('#id').val(res.data.id);
                    $('#nama_will').val(res.data.nama_will);
                    $("#opd").empty()
                    // $("#admin").append('<option value="'+res.data.id+'">Default=='+data.default.name+'</option>');
                    $.each(res.opd,function(key, value)
                    {
                        $("#opd").append('<option value=' + value.id + '>' + value.nama + '</option>');
                    });

                }
            })
        })
        // END EDIT
        
        // Delete
        $('body').on('click','#delete',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("wilayah.delete", ":id") }}';
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