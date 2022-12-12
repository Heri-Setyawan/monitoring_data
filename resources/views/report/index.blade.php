@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Report Monitoring</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Report</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content card">
            <div class="card-body">
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-md">
                            <table id="report" class="table table-hover table-bordered"
                                   style="width:100%">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name Tools</th>
                                    <th scope="col">Voltage RS</th>
                                    <th scope="col">Voltage ST</th>
                                    <th scope="col">Voltage TR</th>
                                    <th scope="col">Voltage RN</th>
                                    <th scope="col">Voltage SN</th>
                                    <th scope="col">Voltage TN</th>
                                    <th scope="col">Power Factor</th>
                                    <th scope="col">Frequency</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($datas as $report )
                                    <tr>
                                        <th scope="row">{{++$i}}</th>
                                        <td>{{ $report->tool->name }}</td>
                                        <td>{{ $report->voltage_rs }}</td>
                                        <td>{{ $report->voltage_st }}</td>
                                        <td>{{ $report->voltage_tr }}</td>
                                        <td>{{ $report->voltage_rn }}</td>
                                        <td>{{ $report->voltage_sn }}</td>
                                        <td>{{ $report->voltage_tn }}</td>
                                        <td>{{ $report->power_factor }}</td>
                                        <td>{{ $report->frequency }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection


