<footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div>
</footer>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('dist/js/demo.js') }}"></script>

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
<!-- PAGE SCRIPTS -->
<script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>

<script>
    $(document).ready(function() {
        setInterval(function () {
            getMonitor()
        }, 5000)

        $('#report').DataTable({
            dom: 'Bfrtip',
            buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });
    })
    function getMonitor(){
        $.ajax({
            url : "realtime",
            type : "GET",
            success : function (data) {

                $("#datas").val(data.voltage);

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

                $("#voltagetn").html(data.voltage_tn + ' A');
                tn = (data.voltage_tn/400)*100;
                $("#tnpercent").width(tn+'%');

                $("#voltagetr").html(data.voltage_tr + ' A');
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
