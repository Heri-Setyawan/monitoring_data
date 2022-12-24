<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>



<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('plugins/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('plugins/flot/plugins/jquery.flot.resize.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- PAGE SCRIPTS -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>




<script>
    $(document).ready(function() {
        getMonitor()
        setInterval(function () {
            getMonitor()
        }, 5000)
        getBarChart()

    })
    function getMonitor(){
        $.ajax({
            url : "realtime",
            type : "GET",
            success : function (data) {

               // $("#datas").val(data.voltage);

                $("#voltagers").html(data.voltage_rs + ' V');
                rs = (data.voltage_rs/400)*100;
                $("#rspercent").width(rs+'%');

                $("#voltagern").html(data.voltage_rn + ' V');
                rn = (data.voltage_rn/400)*100;
                $("#rnpercent").width(rn+'%');

                $("#voltagesn").html(data.voltage_sn + ' V');
                sn = (data.voltage_sn/400)*100;
                $("#snpercent").width(sn+'%');

                $("#voltagest").html(data.voltage_st + ' V');
                st = (data.voltage_st/400)*100;
                $("#stpercent").width(st+'%');

                $("#voltagetn").html(data.voltage_tn + ' V');
                tn = (data.voltage_tn/400)*100;
                $("#tnpercent").width(tn+'%');

                $("#voltagetr").html(data.voltage_tr + ' V');
                tr = (data.voltage_tr/400)*100;
                $("#trpercent").width(tr+'%');

                $("#power_factor").html(data.power_factor + '');
                power = (data.power_factor/10)*100;
                $("#powerpercent").width(power+'%');

                $("#frequency").html(data.frequency + ' Hz');
                frequency = (data.frequency/100)*100;
                $("#frequencypercent").width(frequency+'%');
            }
        })
    }



</script>

<script src="">
    //-------------
    //- LINE CHART -
    //--------------
    new Chart(document.getElementById("line-chart"), {
        type: 'line',
        data: {
            labels: [1500,1600,1700,1750,1800,1850,1900,1950,1999,2050],
            datasets: [{
                data: [86,114,106,106,107,111,133,221,783,2478],
                label: "Africa",
                borderColor: "#3e95cd",
                fill: false
            }, {
                data: [282,350,411,502,635,809,947,1402,3700,5267],
                label: "Asia",
                borderColor: "#8e5ea2",
                fill: false
            }, {
                data: [168,170,178,190,203,276,408,547,675,734],
                label: "Europe",
                borderColor: "#3cba9f",
                fill: false
            }, {
                data: [40,20,10,16,24,38,74,167,508,784],
                label: "Latin America",
                borderColor: "#e8c3b9",
                fill: false
            }, {
                data: [6,3,2,2,7,26,82,172,312,433],
                label: "North America",
                borderColor: "#c45850",
                fill: false
            }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'World population per region (in millions)'
            }
        }
    });
</script>

<script type="text/javascript">
    function showTime() {
        var a_p = "";
        var today = new Date();
        var curr_hour = today.getHours();
        var curr_minute = today.getMinutes();
        var curr_second = today.getSeconds();
        if (curr_hour < 12) {
            a_p = "AM";
        } else {
            a_p = "PM";
        }
        if (curr_hour == 0) {
            curr_hour = 12;
        }
            if (curr_hour > 12) {
            curr_hour = curr_hour - 12;
        }
        curr_hour = checkTime(curr_hour);
        curr_minute = checkTime(curr_minute);
        curr_second = checkTime(curr_second);
        document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
    }

    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }
    setInterval(showTime, 500);
</script>
		
<script type='text/javascript'>
	var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
	var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
	var date = new Date();
	var day = date.getDate();
	var month = date.getMonth();
	var thisDay = date.getDay(),
	thisDay = myDays[thisDay];
	var yy = date.getYear();
	var year = (yy < 1000) ? yy + 1900 : yy;
	document.getElementById('calender').innerHTML=thisDay + ', ' + day + ' ' + months[month] + ' ' + year;
</script>