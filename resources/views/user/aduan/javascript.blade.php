<script>
    $('#kategori').select2({
        theme: 'bootstrap4',
    });

    $('#subkategori').select2({
        theme: 'bootstrap4',
    });

    $('#wilayah').select2({
        theme: 'bootstrap4',
    });

    $('#kecamatan').select2({
        theme: 'bootstrap4',
    });

    $('#kelurahan').select2({
        theme: 'bootstrap4',
    });

    $(document).ready(function(){

        $("#bukti").fileinput({
            theme: 'fa',
            required: true,
            allowedFileExtensions:  ["jpg", "png", "jpeg", "JPG", "JPEG", "PNG"],
            showUpload: false,
            "fileActionSettings":{
                "showDrag":false,
                "showUpload":false,
                "showRemove":false
            }
        })

        $("#bukti_2").fileinput({
               theme: 'fa',
                required: true,
                allowedFileExtensions: ["pdf"],
                showUpload: false,
                "fileActionSettings":{
                    "showDrag":false,
                    "showUpload":false,
                    "showRemove":false
                }
            })
        // Get Data
        $.ajax({
            url:"{{ route('pengaduan.data') }}",
            type:'GET',
            success:function(data){
                console.log(data)
                $.each(data,function(key, value)
                {
                    $("#kategori").append('<option value=' + value.id + '>' + value.kategori + '</option>');
                });
            }
        })
        $.ajax({
            url:"{{ route('pengaduan.wilayah') }}",
            type:'GET',
            success:function(data){
                console.log(data)
                $.each(data,function(key, value)
                {
                    $("#wilayah").append('<option value=' + value.id + '>' + value.nama_will + '</option>');
                });
            }
        })

        $('#kategori').change(function(){
            $("#subkategori").empty();
            var id = $(this).val();
            $.ajax({
                url : "{{ route('pengaduan.subkategori') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id
                    },
                type: 'post',
                dataType: 'json',
                success: function( data )
                {   
                    console.log(data)
                    $("#subkategori").append('<option>Pilih Subkategori</option>');
                    $.each(data,function(key, value)
                    {
                        $("#subkategori").append('<option value=' + value.id + '>' + value.subkategori + '</option>');
                    });
                },
                error: function()
                {
                    //handle errors
                    alert('error...');
                }
            });
        });

        $('#wilayah').change(function(){
            $("#kecamatan").empty();
            var id = $(this).val();
            $.ajax({
                url : "{{ route('pengaduan.kecamatan') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id
                    },
                type: 'post',
                dataType: 'json',
                success: function( data )
                {   
                    console.log(data)
                    $("#kecamatan").append('<option>Pilih Kecamaatan</option>');
                    $.each(data,function(key, value)
                    {
                        $("#kecamatan").append('<option value=' + value.id + '>' + value.nama_kec + '</option>');
                    });
                },
                error: function()
                {
                    //handle errors
                    alert('error...');
                }
            });
        });

        $('#kecamatan').change(function(){
            $("#kelurahan").empty();
            var id = $(this).val();
            $.ajax({
                url : "{{ route('pengaduan.kelurahan') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": id
                    },
                type: 'post',
                dataType: 'json',
                success: function( data )
                {   
                    console.log(data)
                    $("#kelurahan").append('<option>Pilih Kelurahan</option>');
                    $.each(data,function(key, value)
                    {
                        $("#kelurahan").append('<option value=' + value.id + '>' + value.nama_kel + '</option>');
                    });
                },
                error: function()
                {
                    //handle errors
                    alert('error...');
                }
            });
        });
        // End Get Data

        // Store Pengaduan
        $(document).on('submit','#frm_add',function(e){
            e.preventDefault();
            let formData = new FormData($('#frm_add')[0])
           
            $.ajax({
                data : formData,
                url: "{{ route('pengaduan.store') }}",
                type: "POST",
                contentType:false,
                processData:false,
                success: function(response){
                    Swal.fire({
                        title : 'Berhasil !',
                        icon: 'success',
                        text  : 'Berhasil',
                        showConfirmButton : true
                    })
                    .then(result=>window.location.href = "https://ntbcare.asyncrode.id/")
                    // perform operation
                },
                error: function(json) {
                    alert('Error occurs!');
                }
            })
        })
        // End Store
    })

</script>