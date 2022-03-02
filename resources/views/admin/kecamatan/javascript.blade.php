<script>
    $('#wilayah').select2({
        theme: 'bootstrap4',
    });
    $(document).ready(function(){
        var idEdit = 0;

        // Show Data
        var table = $('.tableKecamatan').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('kecamatan.data') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id'},
            {data: 'nama_kec', name: 'nama_kec'},
            {data: 'id_wilayahs', name: 'id_wilayahs'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
        // End Show

        // Create Modal
        $('#addKecamatan').click(function () {
            $('#frm_kecamatan').trigger("reset");
            $('#modalKecamatan').modal('show');
                $.ajax({
                url:"{{ route('kecamatan.getWilayah') }}",
                type:'GET',
                success:function(res){
                    console.log(res)
                    $("#wilayah").empty();
                    $.each(res.data,function(key, value)
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
                url = "{{ route('kecamatan.store') }}"
                type = "POST"
            }else{

                url = '{{ route("kecamatan.update", ":id") }}';
                url = url.replace(':id', idEdit );
                
                type = "PUT"
            }
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : "{{csrf_token()}}"
                },
                type : type,
                url : url,
                data : $('#frm_kecamatan').serialize(),
                success : function(response){
                    Swal.fire({
                        title : 'Berhasil !',
                        icon: 'success',
                        text  : 'Berhasil',
                        showConfirmButton : true
                    })
                    idEdit = 0;
                    $('#frm_kecamatan').trigger("reset");
                    $('#modalKecamatan').modal('hide');
                    table.draw()
                }
            })
        });
        // End Store Data

        
        // EDIT DATA
        $('body').on('click','#edit',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("kecamatan.edit",":id") }}'
            url = url.replace(':id',id)

            $.ajax({
                type : 'GET',
                url : url,
                success:function(res){
                    console.log(res)
                    idEdit = res.data.id;
                    $('#frm_kecamatan').trigger("reset");
                    $('#modalKecamatan').modal('show');
                    $('#id').val(res.data.id);
                    $('#nama').val(res.data.nama_kec);
                    $("#wilayah").empty()
                    // $("#admin").append('<option value="'+res.data.id+'">Default=='+data.default.name+'</option>');
                    $.each(res.wilayah,function(key, value)
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
            var url = '{{ route("kecamatan.delete", ":id") }}';
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