@extends('users.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Playback</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Playback</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Main row -->
                <div class="row">

                    @foreach($monitor as $component)
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-header">
                                    <h5 class="card-title">Data {{$component}}</h5>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col-md-4 col-xl-2">
                                            <input type="date" class="form-content" name="daterange" id="daterange{{$component}}">
                                            <input type="number" class="form-content" min="1" max="24" name="hours" placeholder="Jam" id="hours{{$component}}">
                                        </div>
                                        <div class="col-md-5 col-xl-8">
                                            <button type="button" onclick="getBarChart('{{$component}}')"
                                                    id="btn_range{{$component}}" class="btn btn-primary"
                                                    value="{{$component}}">Cari
                                            </button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">

                                            {{--chart bar--}}
                                            <div id="bar-chart{{$component}}" style="height: 300px;"></div>
                                            <!-- /.chart-responsive -->
                                        </div>
                                        <!-- /.col -->

                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- ./card-body -->

                            </div>
                            <!-- /.card -->
                        </div>
                    @endforeach

                    <!-- /.col -->
                </div>

            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
@endsection

<script>
    // $('document').ready(function(){

    //     // getBarChart()

    // })
    function getBarChart(ranges) {
        var daterange = $('#daterange' + ranges).val()
        var hours = $('#hours' + ranges).val()
        $.ajax({
            url: "barchart/" + daterange,
            type: "GET",
            data: {'component': ranges, 'hour': hours},
            success: function (datas) {
                console.log(Object.values(datas.column))
                // console.log([[1,3],[2,3],[3,3],[4,3],[5,3],[6,3],[7,3],[8,3],[9,3],[10,3],[11,3]])
                @foreach($monitor as $c)
                // console.log($('#daterange{{$c}}').val())
                var bar_data = {
                    data: Object.values(datas.column),
                    bars: {show: true}
                }
                $.plot('#bar-chart' + ranges, [bar_data], {
                    grid: {
                        borderWidth: 0.3,
                        borderColor: '#f3f3f3',
                        tickColor: '#f3f3f3'
                    },
                    series: {
                        bars: {
                            show: true, barWidth: 0.2, align: 'center',
                        },
                    },
                    colors: ['#3c8dbc'],
                    xaxis: {
                        ticks: Object.values(datas.hours)
                    }
                })

                @endforeach
            }
        })
    }
</script>


