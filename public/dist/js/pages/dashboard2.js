$(function () {

  'use strict'

  /* ChartJS
   * -------
   * Here we will create a few charts using ChartJS
   */

  //-------------
  //- PIE CHART -
  //-------------
  // Get context with jQuery - using jQuery's .get() method.

    // function getMonitor(){
    //     $.ajax({
    //         url: "realtime",
    //         type: "GET",
    //         success: function (data) {
    //           var datas = JSON.stringify(data);
    //           $('#datas').val(datas);
    //         }
    //     })
    // }
    setInterval(function () {
        // console.log($('#datas').val())
        document.getElementById("datas").innerHTML = $('#datas').val()
    }, 3000)
    const val = document.querySelector('input').value;

    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = {
      labels: [
          'Voltage',
          'Current',
          'Power Factor',
          'Frequency',

      ],
      datasets: [
        {
          data: [700,500,400,600],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef'],
        }
      ]
    }
    var pieOptions     = {
      legend: {
        display: false
      }
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'doughnut',
      data: pieData,
      options: pieOptions
    })

  //-----------------
  //- END PIE CHART -
  //-----------------

    var bar_data = {
        data : [[1,10], [2,8], [3,4], [4,13], [5,17], [6,9]],
        bars: { show: true }
    }
    $.plot('#bar-chart', [bar_data], {
        grid  : {
            borderWidth: 1,
            borderColor: '#f3f3f3',
            tickColor  : '#f3f3f3'
        },
        series: {
            bars: {
                show: true, barWidth: 0.5, align: 'center',
            },
        },
        colors: ['#3c8dbc'],
        xaxis : {
            ticks: [[1,'January'], [2,'February'], [3,'March'], [4,'April'], [5,'May'], [6,'June']]
        }
    })

})


