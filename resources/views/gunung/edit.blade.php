@extends('layouts.adminmain')
@section('content')

<section class="section">
  <div class="section-header">
    <h1>Data Gunung</h1>
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
              <li class="breadcrumb-item"><a href="{{ route('gunung.index') }}">Data Gunung</a></li>
              <li class="breadcrumb-item active">Edit Data Gunung</li>
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
                    Form Edit Data Gunung
                </h4>
            </div>
          <div class="card-body">
            <form action="{{ route('gunung.update', ['id_gunung' => $gunung->id_gunung]) }}" method="POST" role="form" id="quickForm" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
              @csrf
                <div class="row">
                    <div class="col-sm-12">
                       <form action="" method="get">
                            <div class="form-group">
                                <label for="">Isi :</label>
                                <textarea id="isi" class="form-control" name="isi" rows="10" cols="50"> {{$gunung->isi}}</textarea>
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
