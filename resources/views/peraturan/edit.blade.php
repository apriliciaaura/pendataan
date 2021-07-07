@extends('layouts.adminmain')
@section('content')

<section class="section">
  <div class="section-header">
    <h1>Peraturan Pendakian</h1>
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
              <li class="breadcrumb-item"><a href="{{ route('peraturan.index') }}">Peraturan Pendakian</a></li>
              <li class="breadcrumb-item active">Edit Peraturan Pendakian</li>
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
                    <i class="fas fa-edit"></i>
                    Form Edit Peraturan Pendakian
                </h4>
            </div>
          <div class="card-body">
            <form action="{{ route('peraturan.update', ['id_peraturan' => $peraturan->id_peraturan]) }}" method="POST" role="form" id="quickForm" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
              @csrf
                <div class="row">
                    <div class="col-sm-12">
                       <form action="" method="get">
                            <div class="form-group">
                                <label for="">Isi :</label>
                                <textarea id="isi" class="form-control" name="isi" rows="10" cols="50"> {{$peraturan->isi}}</textarea>
                            </div>
                            <div class="form-group" style="margin-top:30px;">
                                <button type="submit" class="btn btn-md btn-success float-right">
                                    <i style="margin-right: 5px;" class="fas fa-save"></i>
                                    Simpan Perubahan
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
