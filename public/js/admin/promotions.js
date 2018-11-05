$(function() {
    $('#promotionTable').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": document.location.protocol+'//'+document.location.host+""  +"/admin/promotions/get",
            "type": "GET"
        },
        "columns": [
            { "data": function (data) {
                    str = "<div align='center'>" +
                        "<img src='/img/promociones/"+data.image+"' alt='' style='height: 100px; width: auto;'>" +
                        "</div>";
                    return str;
                } },
            { "data": "title" },
            { "data": "desc" },
            { "data": function (data) {
                   str = 'del '+data.desde+" al "+data.hasta;
                    return str;
                } },
            { "data": function (data) {
                    str = "<div align='center'>" +
                        "<button class='btn btn-danger btn-sm' onclick='eliminar("+data.id+")'>Eliminar</button>" +
                        "</div>";
                    return str;
                }}
        ]
    } );

    $('#addPromotion').on('click',function () {
        $('#modalPromotion').modal('show');
    });

    $('#guardar').on('click',function () {
        var data = new FormData(document.getElementById("promotionForm"));
        $.ajax({
            url:document.location.protocol+'//'+document.location.host+""  +"/admin/addpromo",
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
                    $('#modalPromotion').modal('hide');
                    $('#promotionTable').dataTable().api().ajax.reload(null,false);
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

    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
            $('.image-preview').popover('show');
        },
        function () {
            $('.image-preview').popover('hide');
        }
    );
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("Browse");
    });
    // Create the preview image
    $(".image-preview-input input:file").change(function (){
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200
        });
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("Change");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        }
        reader.readAsDataURL(file);
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
                url:document.location.protocol+'//'+document.location.host+""  +"/admin/promotion/delete/"+apikey,
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
                        $('#promotionTable').dataTable().api().ajax.reload(null,false);
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

function change(id) {

    if($('#check'+id).prop('checked') == true){
        mensaje = 'La imagen se agregara a la galeria';
    }else{
        mensaje = 'La imagen se quitara de la galeria';
    }

    swal({
        title: 'Esta seguro que desea seguir?',
        text: mensaje,
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Continuar!'
    }).then((result) => {
        if(result.value){
            $.ajax({
                url:document.location.protocol+'//'+document.location.host+""  +"/admin/image/visible/"+id,
                type:"POST",
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
                        $('#galeriaTable').dataTable().api().ajax.reload(null,false);
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