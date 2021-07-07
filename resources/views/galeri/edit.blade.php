@extends('layouts.adminmain')
@section('content')

<section class="section">
  <div class="section-header">
    <h1>Galeri</h1>
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
              <li class="breadcrumb-item"><a href="{{ route('galeri.index') }}">Galeri</a></li>
              <li class="breadcrumb-item active">Edit Galeri</li>
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
                    Form Edit Galeri
                </h4>
            </div>
          <div class="card-body">
            <form action="{{ route('galeri.update', ['id_galeri' => $galeri->id_galeri]) }}" method="POST" role="form" id="quickForm" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
              @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                            @method('PUT')
                                <label>Gambar :</label>
                                <input type="file" class="form-control-file">
                                <img src="/image/{{$galeri->gambar}}" width="250px">
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan :</label>
                                        <input class="form-control" type="text" placeholder="" name="keterangan" id="" value="{{$galeri->keterangan}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="mt-1 btn med btn-success float-right">
                                        <i class="fas fa-save"></i>
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
  @endsection

@section('ckeditor')
<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>

<script>
    CKEDITOR.replace('ckeditor');
</script>

@endsection
