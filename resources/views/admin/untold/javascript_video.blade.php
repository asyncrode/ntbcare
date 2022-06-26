<script>
    $(document).ready(function(){
        $("#video").fileinput({
            uploadUrl: "#",
            theme: 'fa',
            required: false,
            allowedFileExtensions:  ["mp4", "mov", "avi", "MP4", "MOV", "AVI"],
            showUpload: false,
            "fileActionSettings":{
                "showDrag":false,
                "showUpload":false,
                "showRemove":false
            }
        })

        $('#shortdesc').summernote({
            code: '',
            tabsize: 10,
            height: 200,
        }),

        $(document).on('submit','#frm_add',function(e){
            e.preventDefault();
            let formData = new FormData($('#frm_add')[0])
            formData.append("shortdesc",$('#shortdesc').summernote('code'))
            
           
            $.ajax({
                data : formData,
                url: "{{route('untold.admin.store.video')}}",
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
                    .then(result=>window.location.href='{{route("pengaduan.admin.index")}}')
                   
                    // perform operation
                },
                error: function(json) {
                    alert('Error occurs!');
                }
            })
        })
    })
</script>