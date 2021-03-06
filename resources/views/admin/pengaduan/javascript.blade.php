<script>
    $('body').on('click','#delete',function(){
        var id = $(this).attr('data-id');
        var url = '{{ route("pengaduan.detailaduan.delete", ":id") }}';
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
                        .then(result=>window.location.href='{{route("pengaduan.admin.index")}}')
                    }
                })
            }else{
                Swal.close()
            }
        })
    })
    $('#status').change(function(){
        var id = $(this).attr('data-id');
        var url = '{{ route("pengaduan.admin.stat",":id") }}'
        url = url.replace(':id',id)
        let status = $(this).val();
        console.log(status)
        $.ajax({
            type : 'PUT',
            url : url,
            data: {'status': status, 'id': id},
            success:function(res){
                // location.reload()
                Swal.fire({
                    title: 'Berhasil!',
                    icon : 'success',
                    text : 'Status Berhasil Di Update',
                    showConfirmButton :true
                })
                // setTimeout(location.reload.bind(location), 1500);
                .then(result=>location.reload())
            }
        })
    })
    $('#opd').select2({
        theme: 'bootstrap4',
    });
    // Forward Modal
    $('#forward').click(function () {
        $('#frm_add').trigger("reset");
        $('#modalForward').modal('show');
            $.ajax({
            url:"{{ route('pengaduan.admin.opd') }}",
            type:'GET',
            success:function(res){
                $("#opd").empty();
                $.each(res.data,function(key, value)
                {
                    $("#opd").append('<option value=' + value.id + '>' + value.nama + '</option>');
                });
            }
        })
    });

    // Update Forward
    $('#forwardBtn').click(function(){
        var id = $('#idAduan').val()
        console.log(id)
        var url = '{{ route("pengaduan.admin.forward",":id") }}'
        url = url.replace(':id',id)
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : "{{csrf_token()}}"
            },
            type : 'PUT',
            url : url,
            data : $('#frm_add').serialize(),
            success : function(response){
                Swal.fire({
                    title : 'Berhasil !',
                    icon: 'success',
                    text  : 'Berhasil di Forward',
                    showConfirmButton : true
                })
                $('#frm_add').trigger("reset");
                $('#modalOpd').modal('hide');
                setTimeout(location.reload.bind(location), 1500);
                
            }
        })
    });

    // Add Komentar
    $('#komenBtn').click(function(){
        var id = $('#id_aduan').val()
        var url = '{{ route("admin.komentar.store") }}'
        $.ajax({
            headers : {
                'X-CSRF-TOKEN' : "{{csrf_token()}}"
            },
            type : 'POST',
            url : url,
            data : $('#frm_komen').serialize(),
            success : function(response){
                Swal.fire({
                    title : 'Berhasil !',
                    icon: 'success',
                    text  : 'Komentar Berhasil',
                    showConfirmButton : true
                })
                $('#frm_komen').trigger("reset");
                setTimeout(location.reload.bind(location), 1500);
                
            }
        })
    });
    // End Store Komentar
    
    // Delete komentar
    
</script>