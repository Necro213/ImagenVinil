$(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode      = 'index'
  var intersect = true

  var $salesChart = $('#sales-chart')
  var salesChart  = new Chart($salesChart, {
    type   : 'bar',
    data   : {
      labels  : ['JUN', 'JUL', 'AUG', 'SEP', 'OCT', 'NOV', 'DEC'],
      datasets: [
        {
          backgroundColor: '#007bff',
          borderColor    : '#007bff',
          data           : [1000, 2000, 3000, 2500, 2700, 2500, 3000]
        },
        {
          backgroundColor: '#ced4da',
          borderColor    : '#ced4da',
          data           : [700, 1700, 2700, 2000, 1800, 1500, 2000]
        }
      ]
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
            beginAtZero: true,

            // Include a dollar sign in the ticks
            callback: function (value, index, values) {
              if (value >= 1000) {
                value /= 1000
                value += 'k'
              }
              return '$' + value
            }
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
  })

    $.ajax({
        url:document.location.protocol+'//'+document.location.host+""  +"/admin/visitors/get",
        type:"GET",
    }).done(function(json){
        if(json.code == 200) {
            var $visitorsChart = $('#visitors-chart')
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
            })
        }else{
           alert("Error al cargar los visitantes")
        }
    }).fail(function(){
            alert('error al contactar con el servidor')
    });

    $.ajax({
        url:document.location.protocol+'//'+document.location.host+""  +"/admin/visitors/get",
        type:"GET",
    }).done(function(json){
        if(json.code == 200) {
            var $visitorsChart = $('#ventas-chart')
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
            })
        }else{
            alert("Error al cargar los visitantes")
        }
    }).fail(function(){
        alert('error al contactar con el servidor')
    });
});
