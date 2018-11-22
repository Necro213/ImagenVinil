$(function() {
    $('#ProductTable').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": {
            "url": document.location.protocol+'//'+document.location.host+""  +"/admin/products/get",
            "type": "GET"
        },
        "columns": [
            { "data": function (data) {
                    str = "<div align='center'>" +
                        "<img src='/img/productos/"+data.image+"' alt='' style='height: 100px; width: auto;'>" +
                        "</div>";
                    return str;
                } },
            { "data": "nombre" },
            { "data": "desc" },
            { "data": "categoria" },
            { "data": "subcategoria" },
            { "data": function (data) {
                    str = "<div align='center'>" +
                        "<button class='btn btn-danger btn-sm' onclick='eliminar("+data.id+")'>Eliminar</button>" +
                        "</div>";
                    return str;
                }}
        ]
    } );

    $('#addProduct').on('click',function () {
        $('#modalProduct').modal('show');
    });

    $('#guardar').on('click',function () {
        var data = new FormData(document.getElementById("productForm"));
        $.ajax({
            url:document.location.protocol+'//'+document.location.host+""  +"/admin/addproduct",
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
                    $('#modalProduct').modal('hide');
                    $('#ProductTable').dataTable().api().ajax.reload(null,false);
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

    $('#cat').on('change',function () {
       categoria = $('#cat').val();
        $sub = $('#scat');
       switch (categoria) {
           case '00':
               clear();
               break;
           case 'rotulacion':
               clear();
               $sub.append('<option value="vehiculos">Veiculos</option>');
               $sub.append('<option value="cristales">Cristales</option>');
               $sub.append('<option value="tapices">Tapices</option>');
               $sub.append('<option value="calcomanias">Calcomanias</option>');
               $sub.append('<option value="senaleticas">Señaleticas</option>');
               break;
           case 'senalamiento':
               clear();
               $sub.append('<option value="horizontal">Horizontal</option>');
               $sub.append('<option value="vertical">Vertical</option>');
               break;
           case 'estampados':
               clear();
               $sub.append('<option value="prendas">Prendas</option>');
               $sub.append('<option value="gorras">Gorras</option>');
               break;
           case 'grabados':
               clear();
               $sub.append('<option value="tazas">Tazas</option>');
               $sub.append('<option value="vidrios">Vidrios</option>');
               break;
           case 'anuncios':
               clear();
               $sub.append('<option value="liminosos">Luminosos</option>');
               $sub.append('<option value="bastidores">Bastidores</option>');
               $sub.append('<option value="toldos">Toldos</option>');
               $sub.append('<option value="displays">Displays</option>');
               break;
       }
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

function clear() {
    $('#scat option').remove();
    $('#scat').append('<option value="00">Seleccione una SubCategoria</option>');
}

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
                url:document.location.protocol+'//'+document.location.host+""  +"/admin/product/delete/"+apikey,
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
                        $('#ProductTable').dataTable().api().ajax.reload(null,false);
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