@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Daftar Pegawai</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Data Staff</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
                <div class="container">
                    <a href="/addemployee" type="button" class="btn btn-success mb-2">Add</a>
                    <div class="row">
                    
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $No = 1;
                                @endphp
                                @foreach ($employee as $e )
                                
                                <tr>
                                    <th scope="row">{{ $No++ }}</th>
                                    <td>{{ $e->name }}</td>
                                    <td>{{ $e->email }}</td>
                                    <td>{{ $e->position }}</td>
                                    <td>{{ $e->age }}</td>
                                    <td>{{ $e->address }}</td>
                                    <td>
                                        <a href="/editemployee/{{ $e->id }}" class="btn btn-info">Edit</a>
                                        <a href="/deleteemployee/{{ $e->id }}"  class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                       
                    </div>
                </div>
        </section>
        <!-- /.content -->
    </div>
@endsection


