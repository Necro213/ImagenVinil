$(function () {
    $('#sesion').on('click',function () {
        var data = new FormData(document.getElementById("loginform"));
        $.ajax({
            url:document.location.protocol+'//'+document.location.host+""  +"/admin/dologin",
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
                    type: json.status,
                    title: 'Bienvenido '+json.msg,
                    text: '',
                }).then(function () {
                    //window.location.replace(document.location.protocol+'//'+document.location.host+"/admin");
                });
            }else{
                swal({
                    type: json.status,
                    title: 'Error al iniciar sesion '+json.msg,
                    text: '',
                }).then(function () {
                    //window.location.replace(document.location.protocol+'//'+document.location.host+"/admin");
                });
            }
        }).fail(function(){

        });
    });
});