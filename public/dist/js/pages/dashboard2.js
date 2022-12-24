


$(function () {
    'use strict'

    $(document).ready(function () {
        latestVoltage('voltage_rs')
        latestVoltage('voltage_st')
        latestVoltage('voltage_tr')
        latestVoltage('voltage_rn')
        setInterval(function (){

       location.reload()
    },5000);
          // re-render the chart

    })

    //-----------------------
    // - MONTHLY SALES CHART -
    //-----------------------


    function latestVoltage(v) {

        $.ajax({
            url: "voltage-latest/" + v,
            type: "GET",
            success: function (datas) {

                // const arrayColumn = (arr, n) => arr.map(x => x[n]);
                // console.log(v);
                // Get context with jQuery - using jQuery's .get() method.
                var salesChartCanvas = $('#'+ v).get(0).getContext('2d')

                var salesChartData = {
                    labels: ['Data masuk 1', 'Data masuk 2', 'Data masuk 3', 'Data masuk 4', 'Data masuk 5'],
                    datasets: [
                        {
                            label: v,
                            backgroundColor: 'rgba(65, 32, 159, 0.8)',
                            borderColor: 'rgba(65, 32, 159, 0.8)',
                            pointRadius: false,
                            pointColor: '#3b8bba',
                            pointStrokeColor: 'rgba(65, 32, 159, 1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(65, 32, 159, 1)',
                            data: datas
                        },

                    ]
                }

                var salesChartOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            gridLines: {
                                display: true
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                display: true
                            }
                        }]
                    }
                }

                // This will get the first returned node in the jQuery collection.
                // eslint-disable-next-line no-unused-vars
                var salesChart = new Chart(salesChartCanvas, {
                        type: 'line',
                        data: salesChartData,
                        options: salesChartOptions
                    }
                )

                setInterval(salesChart.update(), 3000);

            }
        })
    }

    //---------------------------
    // - END MONTHLY SALES CHART -
    //---------------------------


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


