$(function() {
    $('#Primavera').on('change',function () {
        readURL(this,'Primavera');
    });
    $('#Verano').on('change',function () {
        readURL(this,'Verano');
    });
    $('#Otono').on('change',function () {
        readURL(this,'Otono');
    });
    $('#Invierno').on('change',function () {
        readURL(this,'Invierno');
    });

    $('#guardar').on('click',function () {
        var data = new FormData(document.getElementById("estacionesForm"));
        $.ajax({
            url:document.location.protocol+'//'+document.location.host+""  +"/admin/estaciones/edit",
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

function readURL(input,name) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#img'+name).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
