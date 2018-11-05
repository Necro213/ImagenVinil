$(function() {
    $('#userTable').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": document.location.protocol+'//'+document.location.host+""  +"/admin/users/get",
            "type": "GET"
        },
        "columns": [
            { "data": "nombre" },
            { "data": "apellidos" },
            { "data": "username" },
            { "data": function (data) {
                    str = "<div align='center'>" +
                        "<button class='btn btn-danger btn-sm' onclick='eliminar(\""+data.apikey+"\")'>Eliminar</button>" +
                        "</div>";
                    return str;
                }}
        ]
    } );

    $('#addUser').on('click',function () {
       $('#modalUser').modal('show');
    });

    $('#guardar').on('click',function () {
        if($('#pass').val() != $('#confirm').val()){
            swal({
                type: 'Error',
                title: 'Contraseñas no coinciden',
                text: '',
            });

            return;
        }
        var data = new FormData(document.getElementById("userForm"));
        $.ajax({
            url:document.location.protocol+'//'+document.location.host+""  +"/admin/reguser",
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
                    $('#modalUser').modal('hide');
                    $('#userTable').dataTable().api().ajax.reload(null,false);
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

function eliminar(apikey){
    swal({
        title: 'Esta seguro que desea eliminarlo?',
        text: "Esta accion no se puede revertir!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Continuar!'
    }).then((result) => {
        if(result.value){
            $.ajax({
                url:document.location.protocol+'//'+document.location.host+""  +"/admin/user/delete/"+apikey,
                type:"DELETE",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }).done(function(json){
                if(json.code == 200) {
                    swal({
                        type: 'success',
                        title: '',
                        text: json.msg,
                    }).then(function () {
                        $('#userTable').dataTable().api().ajax.reload(null,false);
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
        }
    })

}