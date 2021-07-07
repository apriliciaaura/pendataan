@extends('layouts.adminmain')
@section('content')

<section class="section">   
  <div class="section-header">
    <h1>Konfigurasi User</h1>
  </div>

  <div class="row">
    <div class="col-md-12">
        <a href="{{ route('konfigurasi_user.create') }}" class="btn med btn-success float-right">
            <i class="fas fa-plus"></i>
            Tambah Konfigurasi User
        </a>
    </div>
  </div>
  <br>

  <table class="table table-default table-bordered dataTable table-hover" role="grid" aria-describedby="example1_info">
    <thead>
        <tr>
            <th width="5%">No.</th>
            <th width="15%">Nama</th>
            <th width="20%">Username</th>
            <th width="30%">Email</th>
            <th style="text-align: center;vertical-align: middle;">Aksi</th>
         </tr>
         @foreach($konfigurasi_user as $key => $user)
        <tr>
            <td>{{$key+1}}</td>
            <td>{!!$user->nama!!}</td>
            <td>{!!$user->username!!}</td>
            <td>{!!$user->email!!}</td>
            <td width="20%" style="text-align: center;">
            <a href="{{ route('konfigurasi_user.edit', ['id_user' => $user->id_user]) }}" class="btn btn-sm btn-warning">
                <i class="far fa-edit"></i>
                Edit
            </a>
            <a href="{{ route('konfigurasi_user.delete', ['id_user' => $user->id_user]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini?')">
                 <i class="far fa-trash-alt"></i>
                Hapus
            </a>
            </td>
        </tr>
        @endforeach
    </thead>
  </table>
                           
  &nbsp
  <div class="card catatan bg-primary">
  &nbsp
    <h5>Catatan :</h5>
    <ul>
        <li>Konfigurasi User dapat ditambah, diedit dan dihapus</li>
    </ul>
  </div>
</section>

<div class="modal fade" id="modalDelete">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Konfirmasi Hapus</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin untuk menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
        <button type="button" class="btn btn-primary">Ya</button>
      </div>
    </div>
  </div>
</div>
@endsection()