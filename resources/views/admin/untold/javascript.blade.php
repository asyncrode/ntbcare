<script>
    $(document).ready(function(){
        $("#gambar").fileinput({
            uploadUrl: "#",
            theme: 'fa',
            required: false,
            allowedFileExtensions:  ["jpg", "png", "jpeg", "JPG", "JPEG", "PNG"],
            showUpload: false,
            "fileActionSettings":{
                "showDrag":false,
                "showUpload":false,
                "showRemove":false
            }
        })
        $("#video").fileinput({
            uploadUrl: "#",
            theme: 'fa',
            required: false,
            showUpload: false,
            "fileActionSettings":{
                "showDrag":false,
                "showUpload":false,
                "showRemove":false
            }
        })

        $('#description').summernote({
            code: '',
            tabsize: 10,
            height: 200,
        }),

        $('#shortdesc').summernote({
            code: '',
            tabsize: 10,
            height: 200,
        }),

        $(document).on('submit','#frm_add',function(e){
            e.preventDefault();
            let formData = new FormData($('#frm_add')[0])
            formData.append("description",$('#description').summernote('code'))
            formData.append("shortdesc",$('#shortdesc').summernote('code'))
            
           
            $.ajax({
                data : formData,
                url: "{{ route('untold.admin.store') }}",
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
                   
                    // perform operation
                },
                error: function(json) {
                    alert('Error occurs!');
                }
            })
        })
    })
</script>