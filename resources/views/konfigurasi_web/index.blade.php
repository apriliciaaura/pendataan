@extends('layouts.adminmain')
@section('content')

<section class="section">
  <div class="section-header">
    <h1>Konfigurasi Website</h1>
  </div>
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
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
                    <i class="fas fa-cog"></i>
                    Form Konfigurasi Website
                </h3>
            </div>
          <div class="card-body">
              @foreach($konfigurasi_web as $key => $konfigurasi) 
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Website</label>
                      <input type="text" name="nama_web" class="form-control" id="exampleInputEmail1" value="{{ $konfigurasi->nama_web }}" placeholder="" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat/Situs Pengelola</label>
                    <input type="text" name="alamat_web" class="form-control" id="exampleInputEmail1" value="{{ $konfigurasi->alamat_web }}" placeholder="" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telp.</label>
                    <input type="text" name="telepon" class="form-control" id="exampleInputEmail1" value="{{ $konfigurasi->telepon }}" placeholder="" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputPassword1" value="{{ $konfigurasi->email }}" placeholder="" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Website</label>
                    <input type="text" name="alamat_halaman_website" class="form-control" id="exampleInputPassword1" value="{{ $konfigurasi->alamat_halaman_web }}"placeholder="" disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Keyword</label>
                    <input type="keyword" name="keyword" id="exampleInputPassword1" value="{{ $konfigurasi->keyword }}" class="form-control" cols="30" rows="8" disabled></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi Website</label>
                    <input type="deskripsi_situs" id="exampleInputPassword1" class="form-control" value="{{ $konfigurasi->deskripsi_web }}" cols="30" rows="8" disabled></textarea>
                  </div>
              @endforeach()
                    
            </form>
        </div>  
                       
            </div>
        <!-- /.card -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection()