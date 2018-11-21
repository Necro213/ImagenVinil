$(function () {
    var ticksStyle = {
        fontColor: '#495057',
        fontStyle: 'bold'
    };
    var mode      = 'index';
    var intersect = true;
    $('#producto').on('change',function () {
        id = $('#producto').val();
        if($('#producto').val() == '00'){
            var $visitorsChart = $('#ventas-chart');
            var visitorsChart  = new Chart($visitorsChart, {
                data   : {
                    labels  : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',"Agosto", "Septiembre", 'Octubre', 'Noviembre', 'Diciembre'],
                    datasets: [{
                        type                : 'line',
                        data                : [0,0,0,0,0,0,0,0,0,0,0,0],
                        backgroundColor     : 'transparent',
                        borderColor         : '#007bff',
                        pointBorderColor    : '#007bff',
                        pointBackgroundColor: '#007bff',
                        fill                : false
                        // pointHoverBackgroundColor: '#007bff',
                        // pointHoverBorderColor    : '#007bff'
                    },
                        {
                            type                : 'line',
                            data                : [0,0,0,0,0,0,0,0,0,0,0,0],
                            backgroundColor     : 'tansparent',
                            borderColor         : '#ced4da',
                            pointBorderColor    : '#ced4da',
                            pointBackgroundColor: '#ced4da',
                            fill                : false
                            // pointHoverBackgroundColor: '#ced4da',
                            // pointHoverBorderColor    : '#ced4da'
                        }]
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips           : {
                        mode     : mode,
                        intersect: intersect
                    },
                    hover              : {
                        mode     : mode,
                        intersect: intersect
                    },
                    legend             : {
                        display: false
                    },
                    scales             : {
                        yAxes: [{
                            // display: false,
                            gridLines: {
                                display      : true,
                                lineWidth    : '4px',
                                color        : 'rgba(0, 0, 0, .2)',
                                zeroLineColor: 'transparent'
                            },
                            ticks    : $.extend({
                                beginAtZero : true,
                                suggestedMax: 200
                            }, ticksStyle)
                        }],
                        xAxes: [{
                            display  : true,
                            gridLines: {
                                display: false
                            },
                            ticks    : ticksStyle
                        }]
                    }
                }
            });
            return;
        }

        $.ajax({
            url:document.location.protocol+'//'+document.location.host+""  +"/admin/ventas/get/"+id,
            type:"GET",
        }).done(function(json){
            if(json.code == 200) {
                var $visitorsChart = $('#ventas-chart');
                var visitorsChart  = new Chart($visitorsChart, {
                    data   : {
                        labels  : ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',"Agosto", "Septiembre", 'Octubre', 'Noviembre', 'Diciembre'],
                        datasets: [{
                            type                : 'line',
                            data                : json.v1,
                            backgroundColor     : 'transparent',
                            borderColor         : '#007bff',
                            pointBorderColor    : '#007bff',
                            pointBackgroundColor: '#007bff',
                            fill                : false
                            // pointHoverBackgroundColor: '#007bff',
                            // pointHoverBorderColor    : '#007bff'
                        },
                            {
                                type                : 'line',
                                data                : json.v2,
                                backgroundColor     : 'tansparent',
                                borderColor         : '#ced4da',
                                pointBorderColor    : '#ced4da',
                                pointBackgroundColor: '#ced4da',
                                fill                : false
                                // pointHoverBackgroundColor: '#ced4da',
                                // pointHoverBorderColor    : '#ced4da'
                            }]
                    },
                    options: {
                        maintainAspectRatio: false,
                        tooltips           : {
                            mode     : mode,
                            intersect: intersect
                        },
                        hover              : {
                            mode     : mode,
                            intersect: intersect
                        },
                        legend             : {
                            display: false
                        },
                        scales             : {
                            yAxes: [{
                                // display: false,
                                gridLines: {
                                    display      : true,
                                    lineWidth    : '4px',
                                    color        : 'rgba(0, 0, 0, .2)',
                                    zeroLineColor: 'transparent'
                                },
                                ticks    : $.extend({
                                    beginAtZero : true,
                                    suggestedMax: 200
                                }, ticksStyle)
                            }],
                            xAxes: [{
                                display  : true,
                                gridLines: {
                                    display: false
                                },
                                ticks    : ticksStyle
                            }]
                        }
                    }
                });
            }else{
                alert("Error al cargar las ventas")
            }
        }).fail(function(){
            alert('error al contactar con el servidor')
        });
    });

    $('#registrar').on('click',function () {
        if($('#venta').val() == '00' || $('#cantidad').val() == ''){
            swal({
               type: 'error',
               title: "Error!!!",
                text:'Llene todos los campos'
            });
            return;
        }
        var data = new FormData(document.getElementById("ventasForm"));
        $.ajax({
            url:document.location.protocol+'//'+document.location.host+""  +"/admin/regventa",
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
                })
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