@extends('layouts.adminmain')
@section('content')

<section class="section">
  <div class="section-header">
    <h1>Konfigurasi User</h1>
  </div>
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('konfigurasi_user.index') }}">Konfigurasi User</a></li>
              <li class="breadcrumb-item active">Edit Konfigurasi User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h4 class="card-title">
                    <i class="fas fa-plus"></i>
                    Form Tambah Konfigurasi User
                </h4>
            </div>
          <div class="card-body">
          <form action="{{ route('konfigurasi_user.store') }}" method="POST" role="form" enctype="multipart/form-data" id="quickForm">
              @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <form action="" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label for="">Nama :</label>
                                        <input class="form-control" type="text" placeholder="" name="name" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Username :</label>
                                        <input class="form-control" type="text" placeholder="" name="username" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email :</label>
                                        <input class="form-control" type="text" placeholder="" name="email" id="">
                                    </div>
                            <div class="form-group">
                                <button type="submit" class="mt-1 btn med btn-success float-right">
                                        <i class="fas fa-plus"></i>
                                            Tambah
                                        </button>
                                    </div>
                                </form>
                    </div>
                </div>
          </div>                 
        </div>
        <!-- /.card -->
      </div>
    </section>
  </div>

@endsection
