@extends('layouts.adminmain')
@section('content')

<section class="section">
  <div class="section-header">
    <h1>Berita</h1>
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
              <li class="breadcrumb-item"><a href="{{ route('pengumuman.index') }}">Berita</a></li>
              <li class="breadcrumb-item active">Edit Berita</li>
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
                    Form Tambah Berita
                </h4>
            </div>
          <div class="card-body">
          <form action="{{ route('berita.store') }}" method="POST" role="form" enctype="multipart/form-data" id="quickForm">
              @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <form action="" method="get">
                            <div class="form-group">
                            <label>Tanggal :</label>
                                        <div class="input-group date" id="datetimepicker">
                                            <input name="tanggal" type="date" class="form-control datetimepicker-input" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Judul :</label>
                                        <input class="form-control" type="text" placeholder="" name="judul" id="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Isi :</label>
                                        <textarea id="ckeditor" class="form-control" name="isi" rows="10" cols="50"></textarea>
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
  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
  <script>
  CKEDITOR.replace('isi');
  </script>
@endsection
