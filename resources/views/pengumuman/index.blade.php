@extends('layouts.adminmain')
@section('content')

<section class="section">   
  <div class="section-header">
    <h1>Pengumuman</h1>
  </div>

  <div class="row">
    <div class="col-md-12">
        <a href="{{ route('pengumuman.create') }}" class="btn med btn-success float-right">
            <i class="fas fa-plus"></i>
            Tambah Pengumuman
        </a>
    </div>
  </div>
  <br>

  <table style="text-align:center;" class="table table-default table-bordered dataTable table-hover" role="grid" aria-describedby="example1_info">
    <thead>
        <tr>
            <th width="5%">No.</th>
            <th width="15%">Tanggal</th>
            <th width="20%">Judul</th>
            <th width="30%">Isi</th>
            <th style="text-align: center;vertical-align: middle;">Aksi</th>
         </tr>
         @foreach($pengumuman as $key => $p)
        <tr>
            <td>{{$key+1}}</td>
            <td><?=date('d F Y', strtotime($p->tanggal));?></td>
            <td>{!!$p->judul!!}</td>
            <td>{!!$p->isi!!}</td>
            <td width="20%" style="text-align: center;">
            <a href="{{ route('pengumuman.edit', ['id_pengumuman' => $p->id_pengumuman]) }}" class="btn btn-sm btn-warning">
                <i class="far fa-edit"></i>
                Edit
            </a>
            <a href="{{ route('pengumuman.delete', ['id_pengumuman' => $p->id_pengumuman]) }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin untuk menghapus data ini?')">
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
        <li>Pengumuman dapat ditambah, diedit dan dihapus</li>
        <li>Pengumuman akan tampil di halaman awal user</li>
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