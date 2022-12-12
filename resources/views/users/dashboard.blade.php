@extends('users.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Dashboard User</h1>
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
                                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>

                    <div class="col-12 col-sm-6 col-md-6">
                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Members</span>
                                <span class="info-box-number">2,000</span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Data Monitoring</h5>

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
                                    <div class="col-md-12">
                                        <p class="text-center">
                                            <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
                                        </p>
                                        {{--chart bar--}}
                                        <div id="bar-chart" style="height: 300px;"></div>
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
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-6">
                        <!-- MAP & BOX PANE -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Monitoring</h3>

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
                                <div class="col-md-12">
                                    <p class="text-center">
                                        <strong>Goal Completion</strong>
                                    </p>

                                    <div class="progress-group">
                                        Voltage
                                        <span id="voltage" class="float-right"><b>0</b> V</span>
                                        <div class="progress progress-sm">
                                            <div id="voltpercent" class="progress-bar bg-primary" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->

                                    <div class="progress-group">
                                        Current
                                        <span id="current" class="float-right"><b>0</b> A</span>
                                        <div class="progress progress-sm">
                                            <div id="currentpercent" class="progress-bar bg-danger" style="width: 0%"></div>
                                        </div>
                                    </div>

                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        <span class="progress-text">Power Factor</span>
                                        <span id="power_factor"  class="float-right"><b>0</b> </span>
                                        <div class="progress progress-sm">
                                            <div id="powerpercent" class="progress-bar bg-success" style="width: 0%"></div>
                                        </div>
                                    </div>

                                    <!-- /.progress-group -->
                                    <div class="progress-group">
                                        Frequency
                                        <span id="frequency" class="float-right"><b>0</b> Hz</span>
                                        <div class="progress progress-sm">
                                            <div id="frequencypercent" class="progress-bar bg-warning" style="width: 0%"></div>
                                        </div>
                                    </div>
                                    <!-- /.progress-group -->
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- /.row -->

                        <!-- TABLE: LATEST ORDERS -->

                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Monitoring</h3>
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
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="chart-responsive">
                                        <canvas id="pieChart" height="123"></canvas>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <ul class="chart-legend clearfix">
                                        <li><i class="far fa-circle text-danger"></i> Voltage</li>
                                        <li><i class="far fa-circle text-success"></i> Current</li>
                                        <li><i class="far fa-circle text-warning"></i> Power Factor</li>
                                        <li><i class="far fa-circle text-info"></i> Frequency</li>

                                    </ul>
                                </div>
                                <input type="text" id="datas" value="">
                            </div>

                        </div>

                    </div>
                    <!-- /.col -->
                    </div>

                </div>
                <!-- /.row -->
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection


