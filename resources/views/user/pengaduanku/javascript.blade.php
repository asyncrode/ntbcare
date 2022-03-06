<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js" integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    // var moment=moment().startOf('hour').fromNow();
    var moment=moment([2022, 2, 4]).fromNow();
    // console.log(moment)
    $('#time').append(moment);
</script>
<script>
    $(document).ready(function(){
         // Add Komentar
    $('#komenBtn').click(function(){
        var id = $('#id_aduan').val()
        var url = '{{ route("user.komentar.store") }}'
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
    })
</script>