@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard </h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Info boxes -->
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Alat</span>
                                <span class="info-box-number">{{$tool}}</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="info-box">
                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-clock"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-number" id="calender"></span>
                                <span class="info-box-number" id="clock"></span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                </div>


                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Realtime Monitoring Data RS</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <!-- Sales Chart Canvas -->
                                    <canvas id="voltage_rs" height="180" style="height: 180px; display: block; width: 1050px;"
                                            width="1050" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Realtime Monitoring Data ST</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <!-- Sales Chart Canvas -->
                                    <canvas id="voltage_st" height="180" style="height: 180px; display: block; width: 1050px;"
                                            width="1050" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Realtime Monitoring Data TR</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <!-- Sales Chart Canvas -->
                                    <canvas id="voltage_tr" height="180" style="height: 180px; display: block; width: 1050px;"
                                            width="1050" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Realtime Monitoring Data RN</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <!-- Sales Chart Canvas -->
                                    <canvas id="voltage_rn" height="180" style="height: 180px; display: block; width: 1050px;"
                                            width="1050" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-4">
                        <!-- MAP & BOX PANE -->
                        <div class="card">
                            <div class="card-header">
                                <span class="card-title">Voltage 3 Phase 380 V</span>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="col-md-12">
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Voltage 380 RS</span>
                                        <span id="voltagers"  class="float-right"><b>0</b> V</span>
                                        <div class="progress progress-sm">
                                            <div id="rspercent" class="progress-bar bg-gradient-danger" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Voltage 380 ST</span>
                                        <span id="voltagest"  class="float-right"><b>0</b> V</span>
                                        <div class="progress progress-sm">
                                            <div id="stpercent" class="progress-bar bg-gradient-warning" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Voltage 380 TR</span>
                                        <span id="voltagetr"  class="float-right"><b>0</b> V</span>
                                        <div class="progress progress-sm">
                                            <div id="trpercent" class="progress-bar bg-gradient-dark" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <!-- MAP & BOX PANE -->
                        <div class="card">
                            <div class="card-header">
                                <span class="card-title">Voltage 1 Phase 220 V</span>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="col-md-12">
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Voltage 220 RN</span>
                                        <span id="voltagern"  class="float-right"><b>0</b> V</span>
                                        <div class="progress progress-sm">
                                            <div id="rnpercent" class="progress-bar bg-gradient-danger" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Voltage 220 SN</span>
                                        <span id="voltagesn"  class="float-right"><b>0</b> V</span>
                                        <div class="progress progress-sm">
                                            <div id="snpercent" class="progress-bar bg-gradient-warning" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Voltage 220 TN</span>
                                        <span id="voltagetn"  class="float-right"><b>0</b> V</span>

                                        <div class="progress progress-sm">
                                            <div id="tnpercent" class="progress-bar bg-gradient-dark" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- MAP & BOX PANE -->
                        <div class="card">
                            <div class="card-header">
                                <span class="card-title">Power Factor & Frequency</span>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="col-md-12">
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Power Factor</span>
                                        <span id="power_factor"  class="float-right"><b>0</b> </span>

                                        <div class="progress progress-sm">
                                            <div id="powerpercent" class="progress-bar bg-gradient-info" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Frequency</span>
                                        <span id="frequency"  class="float-right"><b>0</b> Hz</span>

                                        <div class="progress progress-sm">
                                            <div id="frequencypercent" class="progress-bar bg-gradient-info" style="width: 0%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->


    </div>
    <script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
@endsection



