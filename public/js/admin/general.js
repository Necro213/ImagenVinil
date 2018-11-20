$(function() {
    $('#guardar').on('click',function () {
        var data = new FormData(document.getElementById("generalForm"));
        $.ajax({
            url:document.location.protocol+'//'+document.location.host+""  +"/admin/general/edit",
            type:"POST",
            data: data,
            contentType:false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }).done(function(json){
            if(json.code == 200) {
                swal({
                    type: json.message,
                    title: 'Correcto',
                    text: json.msg,
                }).then(function () {
                    window.location = window.location.href+'?eraseCache=true';
                });
            }else{
                swal({
                    type: json.message,
                    title: json.msg,
                    text: '',
                }).then(function () {

                });
            }
        }).fail(function(){

        });
    });
});
