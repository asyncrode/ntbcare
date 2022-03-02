<script>
    $('#kecamatan').select2({
        theme: 'bootstrap4',
    });
    $(document).ready(function(){
        var idEdit = 0;

        // Show Data
        var table = $('.tableKelurahan').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('kelurahan.data') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id'},
            {data: 'nama_kel', name: 'nama_kel'},
            {data: 'id_kecamatans', name: 'id_kecamatans'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
        // End Show

        // Create Modal
        $('#addKelurahan').click(function () {
            $('#frm_kelurahan').trigger("reset");
            $('#modalKelurahan').modal('show');
                $.ajax({
                url:"{{ route('kelurahan.getWilayah') }}",
                type:'GET',
                success:function(res){
                    console.log(res)
                    $("#kecamatan").empty();
                    $.each(res.data,function(key, value)
                    {
                        $("#kecamatan").append('<option value=' + value.id + '>' + value.nama_kec + '</option>');
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
                url = "{{ route('kelurahan.store') }}"
                type = "POST"
            }else{

                url = '{{ route("kelurahan.update", ":id") }}';
                url = url.replace(':id', idEdit );
                
                type = "PUT"
            }
            $.ajax({
                headers : {
                    'X-CSRF-TOKEN' : "{{csrf_token()}}"
                },
                type : type,
                url : url,
                data : $('#frm_kelurahan').serialize(),
                success : function(response){
                    Swal.fire({
                        title : 'Berhasil !',
                        icon: 'success',
                        text  : 'Berhasil',
                        showConfirmButton : true
                    })
                    idEdit = 0;
                    $('#frm_kelurahan').trigger("reset");
                    $('#modalKelurahan').modal('hide');
                    table.draw()
                }
            })
        });
        // End Store Data

        
        // EDIT DATA
        $('body').on('click','#edit',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("kelurahan.edit",":id") }}'
            url = url.replace(':id',id)

            $.ajax({
                type : 'GET',
                url : url,
                success:function(res){
                    console.log(res)
                    idEdit = res.data.id;
                    $('#frm_kelurahan').trigger("reset");
                    $('#modalKelurahan').modal('show');
                    $('#id').val(res.data.id);
                    $('#nama').val(res.data.nama_kel);
                    $("#kecamatan").empty()
                    // $("#admin").append('<option value="'+res.data.id+'">Default=='+data.default.name+'</option>');
                    $.each(res.kecamatan,function(key, value)
                    {
                        $("#kecamatan").append('<option value=' + value.id + '>' + value.nama_kec + '</option>');
                    });

                }
            })
        })
        // END EDIT
        
        // Delete
        $('body').on('click','#delete',function(){
            var id = $(this).attr('data-id');
            var url = '{{ route("kelurahan.delete", ":id") }}';
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