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
                $.each(data.kategori,function(key, value)
                {
                    $("#kategori").append('<option value=' + value.id + '>' + value.kategori + '</option>');
                });

                $.each(data.sub,function(key, value)
                {
                    $("#subkategori").append('<option value=' + value.id + '>' + value.subkategori + '</option>');
                });

                $.each(data.wilayah,function(key, value)
                {   
                    console.log(value.id_wilayahs)
                    $("#wilayah").append('<option value=' + value.id + '>' + value.nama_will + '</option>');
                });

                $.each(data.kecamatan,function(key, value)
                {
                    $("#kecamatan").append('<option value=' + value.id + '>' + value.nama_kec + '</option>');
                });

                $.each(data.kelurahan,function(key, value)
                {
                    $("#kelurahan").append('<option value=' + value.id + '>' + value.nama_kel + '</option>');
                });
            }
        })
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
                    alert('sukses');
                    window.location.href = "http://localhost:8000/"
                    //perform operation
                },
                error: function(json) {
                    alert('Error occurs!');
                }
            })
        })
        // End Store
    })

</script>