@extends('layouts.adminmain')
@section('content')

<section class="section">
  <div class="section-header">
    <h1>Data Pendaki</h1>
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
              <li class="breadcrumb-item"><a href="{{ route('pendaki.index') }}">Data Pendaki</a></li>
              <li class="breadcrumb-item active">Edit Data Pendaki</li>
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
                    Form Edit Data Pendaki
                </h4>
            </div>
          <div class="card-body">
            <form action="{{ route('pendaki.update', ['id_pendaki' => $pendaki->id_pendaki]) }}" method="POST" role="form" id="quickForm" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
              @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <form action="" method="get">
                            <div class="form-group">
                                <label for="">Nama :</label>
                                        <input class="form-control" type="text" placeholder="" name="nama" id="" value="{{ $pendaki->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin :</label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="{{ $pendaki->jenis_kelamin}}">
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Identitas :</label>
                                <select class="form-control" name="jenis_identitas" id="jenis_identitas" value="{{ $pendaki->jenis_identitas}}">
                                    <option value="KTP">KTP</option>
                                    <option value="SIM">SIM</option>
                                    <option value="Kartu Pelajar">Kartu Pelajar</option>
                                    <option value="Passport">Passport</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">No. Identitas :</label>
                                    <input class="form-control" type="text" placeholder="" name="no_identitas" id="" value="{{ $pendaki->no_identitas}}">
                            </div>
                            <div class="form-group">
                                <label for="">Alamat :</label>
                                        <input class="form-control" type="text" placeholder="" name="alamat" id="" value="{{ $pendaki->alamat}}">
                            </div>
                            <div class="form-group">
                                <label for="">No. HP :</label>
                                    <input class="form-control" type="text" placeholder="" name="no_hp" id="" value="{{ $pendaki->no_hp}}">
                            </div>
                            <div class="form-group">
                                <label for="">Email :</label>
                                    <input class="form-control" type="text" placeholder="" name="email" id="" value="{{ $pendaki->email}}">
                            </div>
                            <label>Tanggal Berangkat :</label>
                                    <div class="input-group date" id="datetimepicker">
                                        <input name="tanggal_berangkat" type="date" class="form-control datetimepicker-input" value="{{ $pendaki->tanggal_berangkat}}" />
                                    </div>
                                    <br>
                                    <label>Tanggal Kembali :</label>
                                    <div class="input-group date" id="datetimepicker">
                                        <input name="tanggal_kembali" type="date" class="form-control datetimepicker-input" value="{{ $pendaki->tanggal_kembali}}" />
                                    </div>
                                    <br>
                                    <div class="form-group">
                                <label for="">Status :</label>
                                    <input class="form-control" type="text" placeholder="" name="status" id="" value="{{ $pendaki->status}}">
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
