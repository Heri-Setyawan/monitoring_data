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
                                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                        <!-- /.info-box -->
                    </div>
                    <!-- /.col -->
                    {{--                    <div class="col-12 col-sm-6 col-md-3">--}}
                    {{--                        <div class="info-box mb-3">--}}
                    {{--                            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>--}}

                    {{--                            <div class="info-box-content">--}}
                    {{--                                <span class="info-box-text">Likes</span>--}}
                    {{--                                <span class="info-box-number">41,410</span>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- /.info-box-content -->--}}
                    {{--                        </div>--}}
                    {{--                        <!-- /.info-box -->--}}
                    {{--                    </div>--}}
                    {{--                    <!-- /.col -->--}}

                    {{--                    <!-- fix for small devices only -->--}}
                    {{--                    <div class="clearfix hidden-md-up"></div>--}}

                    {{--                    <div class="col-12 col-sm-6 col-md-3">--}}
                    {{--                        <div class="info-box mb-3">--}}
                    {{--                            <span class="info-box-icon bg-success elevation-1"><i--}}
                    {{--                                    class="fas fa-shopping-cart"></i></span>--}}

                    {{--                            <div class="info-box-content">--}}
                    {{--                                <span class="info-box-text">Sales</span>--}}
                    {{--                                <span class="info-box-number">760</span>--}}
                    {{--                            </div>--}}
                    {{--                            <!-- /.info-box-content -->--}}
                    {{--                        </div>--}}
                    {{--                        <!-- /.info-box -->--}}
                    {{--                    </div>--}}
                    <!-- /.col -->
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
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-tool dropdown-toggle"
                                                data-toggle="dropdown">
                                            <i class="fas fa-wrench"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                                            <a href="#" class="dropdown-item">Action</a>
                                            <a href="#" class="dropdown-item">Another action</a>
                                            <a href="#" class="dropdown-item">Something else here</a>
                                            <a class="dropdown-divider"></a>
                                            <a href="#" class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
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

                                        <div class="chart">
                                            <!-- Sales Chart Canvas -->
                                            <canvas id="salesChart" height="180" style="height: 180px;"></canvas>
                                        </div>
                                        <!-- /.chart-responsive -->
                                    </div>
                                    <!-- /.col -->

                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- ./card-body -->
                            {{--                            <div class="card-footer">--}}
                            {{--                                <div class="row">--}}
                            {{--                                    <div class="col-sm-3 col-6">--}}
                            {{--                                        <div class="description-block border-right">--}}
                            {{--                                            <span class="description-percentage text-success"><i--}}
                            {{--                                                    class="fas fa-caret-up"></i> 17%</span>--}}
                            {{--                                            <h5 class="description-header">$35,210.43</h5>--}}
                            {{--                                            <span class="description-text">TOTAL REVENUE</span>--}}
                            {{--                                        </div>--}}
                            {{--                                        <!-- /.description-block -->--}}
                            {{--                                    </div>--}}
                            {{--                                    <!-- /.col -->--}}
                            {{--                                    <div class="col-sm-3 col-6">--}}
                            {{--                                        <div class="description-block border-right">--}}
                            {{--                                            <span class="description-percentage text-warning"><i--}}
                            {{--                                                    class="fas fa-caret-left"></i> 0%</span>--}}
                            {{--                                            <h5 class="description-header">$10,390.90</h5>--}}
                            {{--                                            <span class="description-text">TOTAL COST</span>--}}
                            {{--                                        </div>--}}
                            {{--                                        <!-- /.description-block -->--}}
                            {{--                                    </div>--}}
                            {{--                                    <!-- /.col -->--}}
                            {{--                                    <div class="col-sm-3 col-6">--}}
                            {{--                                        <div class="description-block border-right">--}}
                            {{--                                            <span class="description-percentage text-success"><i--}}
                            {{--                                                    class="fas fa-caret-up"></i> 20%</span>--}}
                            {{--                                            <h5 class="description-header">$24,813.53</h5>--}}
                            {{--                                            <span class="description-text">TOTAL PROFIT</span>--}}
                            {{--                                        </div>--}}
                            {{--                                        <!-- /.description-block -->--}}
                            {{--                                    </div>--}}
                            {{--                                    <!-- /.col -->--}}
                            {{--                                    <div class="col-sm-3 col-6">--}}
                            {{--                                        <div class="description-block">--}}
                            {{--                                            <span class="description-percentage text-danger"><i--}}
                            {{--                                                    class="fas fa-caret-down"></i> 18%</span>--}}
                            {{--                                            <h5 class="description-header">1200</h5>--}}
                            {{--                                            <span class="description-text">GOAL COMPLETIONS</span>--}}
                            {{--                                        </div>--}}
                            {{--                                        <!-- /.description-block -->--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                                <!-- /.row -->--}}
                            {{--                            </div>--}}
                            <!-- /.card-footer -->
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
                                        <span class="progress-text">Frequency</span>
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
                                        <canvas id="pieChart" height="125"></canvas>
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


