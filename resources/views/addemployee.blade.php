@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Create Data Pegawai</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home">Home</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="container">
            <div class="row justify-content_center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="/insertemployee" method="post" enctype="multipart/form_data" class="was-validated">
                                @csrf
                                <div class="form-row">
                                    <div class=" col-md-6 mb-3">
                                        <label for="validationName">Nama Lengkap</label>
                                        <input class="form-control is-invalid" name="name" id="validationName" placeholder="name" required>
                                    </div>

                                    <div class=" col-md-3 mb-3">
                                        <label for="validationRole">Role</label>
                                        <select class="form-control is-invalid" name="role" id="" required>
                                            <option value="user">User</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>

                                    <div class=" col-md-3 mb-3">
                                        <label for="validationAge">Umur</label>
                                        <input class="form-control is-invalid" name="age" id="validationAge" placeholder="age" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class=" col-md-3 mb-3">
                                        <label for="validationEmail">Alamat Email</label>
                                        <input class="form-control is-invalid" name="email" id="validationEmail" placeholder="email@gmail.com" required>
                                    </div>

                                    <div class=" col-md-3 mb-3">
                                        <label for="validationPassword">Password</label>
                                        <input type="password" class="form-control is-invalid" name="password" id="validationPassword" placeholder="Password" required>
                                    </div>

                                    <div class="col-md-6 mb-3">
                                    <label for="validationPosition">Jabatan</label>
                                        <select class="custom-select" name="position" id="validationPosition" required>
                                            <option selected disabled value="">choose...</option>
                                            <option>Konstruksi</option>
                                            <option>Utility</option>
                                            <option>Thickener</option>
                                            <option>Destilasi</option>
                                            <option>Pemeliharaan</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationAlamat">Alamat</label>
                                        <textarea class="form-control is-invalid" name="address" id="validationAlamat" placeholder="addres" rows="3" required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
@endsection


